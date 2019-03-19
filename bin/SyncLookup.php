<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

use CallbackFilterIterator;
use PhpParser\BuilderFactory;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Return_;
use PhpParser\PrettyPrinter\Standard;
use RecursiveCallbackFilterIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClassConstant;
use SignpostMarv\DaftObject\SchemaOrg\Thing;

require_once(__DIR__ . '/../vendor/autoload.php');

/**
* @var iterable<string>
*/
$iterator = new CallbackFilterIterator(
    new RecursiveIteratorIterator(
        new RecursiveCallbackFilterIterator(
            new RecursiveDirectoryIterator(
                (__DIR__ . '/../src/'),
                (
                    RecursiveDirectoryIterator::CURRENT_AS_PATHNAME |
                    RecursiveDirectoryIterator::SKIP_DOTS |
                    RecursiveDirectoryIterator::UNIX_PATHS
                )
            ),
            function (string $path_name) : bool {
                return
                    is_dir($path_name) ||
                    (
                        is_file($path_name) &&
                        '.php' === mb_substr($path_name, -4)
                    );
            }
        )
    ),
    function (string $path_name) : bool {
        return is_file($path_name);
    }
);

$root_length = mb_strlen(__DIR__ . '/../src/');

/**
* @var array<string, array<int, string>>
*
* @psalm-var array<class-string<Thing>, array<int, class-string<Thing>>>
*/
$cache = [];

/**
* @var array<string, array<string, int>>
*/
$distances = [];

/**
* @var array<int, string>
*
* @psalm-var array<int, class-string<Thing>>
*/
$classes = [];

foreach ($iterator as $pathname) {
    $class_name =
        'SignpostMarv\\DaftObject\\SchemaOrg\\' .
        str_replace('/', '\\', mb_substr($pathname, $root_length, -4));

    if (is_a($class_name, Thing::class, true)) {
        $reflector_type = new ReflectionClassConstant($class_name, 'SCHEMA_ORG_TYPE');

        $classes[] = $class_name;
        $cache[$class_name] = [];
        $distances[$class_name] = [];
    }
}

foreach ($classes as $class_name) {
    $checking = $class_name;

    $append = [];

    $int_distance = 0;

    while (is_a($checking, Thing::class, true)) {
        $append[] = $checking;
        $distances[$checking][$class_name] = $int_distance;

        foreach ($append as $append_class_name) {
            if ( ! in_array($append_class_name, $cache[$checking], true)) {
                $cache[$checking][] = $append_class_name;
            }
        }

        ++$int_distance;

        /**
        * @var string
        *
        * @psalm-var class-string
        */
        $checking = get_parent_class($checking);
    }
}

foreach ($cache as $class_name => $cache_classes) {
    usort($cache_classes, function (string $a, string $b) use ($class_name, $distances) : int {
        return $distances[$class_name][$b] <=> $distances[$class_name][$a];
    });

    $cache[$class_name] = $cache_classes;
}

uksort($cache, function (string $a, string $b) use ($distances) : int {
    return $distances[Thing::class][$a] <=> $distances[Thing::class][$b];
});

$out = new Standard();
$factory = new BuilderFactory();

/**
* @var array<string, array<int, string>>
*
* @psalm-var array<class-string<Thing>, array<int, class-string<Thing>>>
*/
$cache = $cache;

foreach ($cache as $parent_class => $cache_classes) {
    $class_name = 'Lookup_' . hash('sha512', $parent_class);

    $builder = $factory->namespace(
        'SignpostMarv\\DaftObject\\SchemaOrgLookup'
    )->addStmt(
        $factory->class(
            $class_name
        )->implement(
            'LookupInterface'
        )->addStmt(
            $factory->method('ObtainClasses')->makePublic()->makeStatic()->addStmt(
                (
                    new Return_(
                        new Array_(
                            array_map(
                                function (string $str) : ArrayItem {
                                    return new ArrayItem(new String_($str));
                                },
                                $cache_classes
                            )
                        )
                    )
                )
            )->setReturnType('array')
        )
    );

    file_put_contents(
        (
            __DIR__ .
            '/../SchemaOrgLookup/' .
            $class_name .
            '.php'
        ),
        $out->prettyPrintFile([$builder->getNode()])
    );
}
