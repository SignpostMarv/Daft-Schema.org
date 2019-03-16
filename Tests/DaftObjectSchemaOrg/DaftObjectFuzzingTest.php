<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use CallbackFilterIterator;
use InvalidArgumentException;
use Generator;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use RecursiveCallbackFilterIterator;
use ReflectionClass;
use ReflectionClassConstant;
use RuntimeException;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectFuzzingTest as Base;

class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    private static $cache = [];

    private static $deep_cache = [];

    private static $obj_cache = [];

    private static $obj_deep_cache = [];

    private static $fuzzing_cache = [];

    /**
    * @psalm-param class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType> $type
    *
    * @psalm-return Generator<int, array<string, scalar|array|object|null>, mixed, void>
    */
    protected static function YieldArgsForTypeForFuzzing(string $type, bool $deep = false) : Generator
    {
        $args = $deep ? (self::$deep_cache[$type] ?? []) : (self::$cache[$type] ?? []);

        if ($deep && ! isset(self::$deep_cache[$type])) {
            $args = [];
            foreach (
                $type::DaftObjectPropertiesWithMultiTypedArraysOfUniqueValues() as $property => $types
            ) {
                if ( ! isset($args[$property])) {
                    $args[$property] = [];
                }
                static::assertIsArray(
                    $types,
                    (
                        $type .
                        '::PROPERTIES_WITH_MULTI_TYPED_ARRAYS[' .
                        $property .
                        '] was not an array, ' .
                        gettype($types) .
                        ' given!'
                    )
                );

                foreach ($types as $sub_type) {
                    if ( ! class_exists($sub_type) && ! interface_exists($sub_type)) {
                        switch ($sub_type) {
                            case 'string':
                                $args[$property][] = 'Foo' . count($args[$property]);
                                break;
                            case 'double':
                                $args[$property][] = (float) count($args[$property]);
                                break;
                            case 'integer':
                                $args[$property][] = count($args[$property]);
                                break;
                            case 'boolean':
                                $args[$property][] = true;
                                break;
                            default:
                                throw new RuntimeException('Unsupported type: ' . $sub_type);
                                break;
                        }
                    } elseif (
                        is_a($sub_type, SchemaOrg\Thing::class, true) ||
                        is_a($sub_type, SchemaOrg\DataTypes\DataType::class, true)
                    ) {
                        foreach (static::YieldCachedObjectsOfTypeForFuzzing([$sub_type]) as $obj) {
                            if ( ! in_array($obj, $args[$property], true)) {
                                $args[$property][] = $obj;
                            }
                        }
                    }
                }
            }

            $const = new ReflectionClassConstant($type, 'PROPERTIES_WITH_MULTI_TYPED_ARRAYS');

            foreach (array_keys($args) as $property) {
                if (
                    $type === $const->getDeclaringClass()->name &&
                    $deep
                ) {
                    static::assertGreaterThan(
                        0,
                        count($args[$property]),
                        (
                            $type .
                            '[' .
                            $property .
                            '] did not have any values when generated data passes were done!'
                        )
                    );
                } elseif (count($args[$property]) < 1) {
                    unset($args[$property]);
                }
            }

            self::$deep_cache[$type] = $args;
        } elseif ( ! $deep && ! isset(self::$cache[$type])) {
            self::$cache[$type] = ['name' => ['Foo']];

            $args = self::$cache[$type];
        }

        yield $args;

        if ($type === SchemaOrg\Intangible\Enumeration\QualitativeValue::class) {
            yield [
                'identifier' => [
                    'M',
                ],
                'equal' => [
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'medium',
                        ],
                    ]),
                ],
                'nonEqual' => [
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'S',
                        ],
                    ]),
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'L',
                        ],
                    ]),
                ],
                'greater' => [
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'S',
                        ],
                    ]),
                ],
                'greaterOrEqual' => [
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'medium',
                        ],
                    ]),
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'S',
                        ],
                    ]),
                ],
                'lesser' => [
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'L',
                        ],
                    ]),
                ],
                'lesserOrEqual' => [
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'medium',
                        ],
                    ]),
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'L',
                        ],
                    ]),
                ],
            ];
        }
    }

    /**
    * @param array<int, string> $types
    *
    * @psalm-param array<int, class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType>> $types
    *
    * @psalm-return Generator<int, SchemaOrg\Thing|SchemaOrg\DataTypes\DataType, mixed, void>
    */
    protected static function YieldObjectsOfTypeForFuzzing(
        array $types,
        bool $deep = false
    ) : Generator {
        foreach ($types as $gimme) {
            if ($gimme === SchemaOrg\DataTypes\Date::class) {
                yield new SchemaOrg\DataTypes\Date('January 1st 1970');
            } elseif ($gimme === SchemaOrg\DataTypes\DateTime::class) {
                yield new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03');
            } elseif ($gimme === SchemaOrg\DataTypes\DataType\Text\CssSelectorType::class) {
                yield SchemaOrg\DataTypes\DataType\Text\CssSelectorType::DataTypeFromString(
                    '.foo'
                );
            } elseif ($gimme === SchemaOrg\DataTypes\DataType\Text\XPathType::class) {
                yield SchemaOrg\DataTypes\DataType\Text\XPathType::DataTypeFromString('//foo');
            } elseif ( ! (new ReflectionClass($gimme))->isAbstract()) {
                foreach (static::YieldArgsForTypeForFuzzing($gimme) as $args) {
                    yield new $gimme($args);
                }
            }
        }
    }

    protected static function YieldCachedObjectsOfTypeForFuzzing(
        array $types,
        bool $deep = false
    ) : Generator {
        if ($deep) {
            foreach ($types as $gimme) {
                if ( ! isset(self::$obj_deep_cache[$gimme])) {
                    self::$obj_deep_cache[$gimme] = iterator_to_array(
                        static::YieldObjectsOfTypeForFuzzing([$gimme], $deep)
                    );
                }

                yield from self::$obj_deep_cache[$gimme];
            }
        } else {
            foreach ($types as $gimme) {
                if ( ! isset(self::$obj_cache[$gimme])) {
                    self::$obj_cache[$gimme] = iterator_to_array(
                        static::YieldObjectsOfTypeForFuzzing([$gimme], $deep)
                    );
                }

                yield from self::$obj_cache[$gimme];
            }
        }
    }

    protected static function YieldTypeForFuzzing() : Generator
    {
        $iterator = new CallbackFilterIterator(
            new RecursiveIteratorIterator(
                new RecursiveCallbackFilterIterator(
                    new RecursiveDirectoryIterator(
                        (__DIR__ . '/../../src/'),
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

        $root_length = mb_strlen(__DIR__ . '/../../src/');

        foreach ($iterator as $pathname) {
            $class_name =
                '\\SignpostMarv\\DaftObject\\SchemaOrg\\' .
                str_replace('/', '\\', mb_substr($pathname, $root_length, -4));

            if (is_a($class_name, SchemaOrg\Thing::class, true)) {
                $reflector = new ReflectionClassConstant(
                    $class_name,
                    'PROPERTIES_WITH_MULTI_TYPED_ARRAYS'
                );

                if ($class_name === '\\' . $reflector->getDeclaringClass()->name) {
                    $reflector = new ReflectionClass($class_name);

                    if ( ! $reflector->isAbstract()) {
                        yield $reflector->name;
                    }
                }
            }
        }
    }

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        if (count(self::$fuzzing_cache) < 1) {
            $cache = [];
        foreach (static::YieldTypeForFuzzing() as $type) {
            foreach (static::YieldArgsForTypeForFuzzing($type, true) as $args) {
                $cache[] = [$type, $args];
            }
        }

            self::$fuzzing_cache = $cache;
        }

        yield from self::$fuzzing_cache;
    }
}
