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
use ReflectionClassConstant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectFuzzingTest as Base;

class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    /**
    * @psalm-param class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType> $type
    *
    * @psalm-return Generator<int, array<string, scalar|array|object|null>, mixed, void>
    */
    protected static function YieldArgsForTypeForFuzzing(string $type, bool $deep = false) : Generator
    {
        $args = [];

        foreach ($type::PROPERTIES_WITH_MULTI_TYPED_ARRAYS as $property => $types) {
            if ( ! isset($args[$property])) {
                $args[$property] = [];
            }

            foreach ($types as $sub_type) {
                if ( ! class_exists($sub_type) && ! interface_exists($sub_type)) {
                    switch ($sub_type) {
                        case 'string':
                            $args[$property][] = 'Foo';
                            break;
                        case 'double':
                            $args[$property][] = 1.2;
                            break;
                        case 'integer':
                            $args[$property][] = 3;
                            break;
                        case 'boolean':
                            $args[$property][] = true;
                            break;
                        default:
                            var_dump($sub_type);exit(1);
                            break;
                    }
                }
            }
        }

        if ($deep) {
            $const = new ReflectionClassConstant($type, 'PROPERTIES_WITH_MULTI_TYPED_ARRAYS');
            if ($type === $const->getDeclaringClass()->name) {
                foreach ($type::PROPERTIES_WITH_MULTI_TYPED_ARRAYS as $property => $types) {
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
                }
                foreach (
                    array_map(
                        function (array $in) : array {
                            return array_filter($in, function (string $maybe) : bool {
                                return
                                    is_a($maybe, SchemaOrg\Thing::class, true) ||
                                    is_a($maybe, SchemaOrg\DataTypes\DataType::class, true);
                            });
                        },
                        $type::PROPERTIES_WITH_MULTI_TYPED_ARRAYS
                    ) as $property => $types
                ) {
                    if ( ! isset($args[$property])) {
                        $args[$property] = [];
                    }

                    foreach (
                        static::YieldObjectsOfTypeForFuzzing($types) as $obj
                    ) {
                        $args[$property][] = $obj;
                    }
                }
            }
        }

        foreach (array_keys($args) as $property) {
            if (count($args[$property]) < 1) {
                unset($args[$property]);
            }
        }

        if (count($args) > 0) {
            yield $args;
        }


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
            } else {
                foreach (static::YieldArgsForTypeForFuzzing($gimme) as $args) {
                    yield new $gimme($args);
                }
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
                    yield $class_name;
                }
            }
        }
    }

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        foreach (static::YieldTypeForFuzzing() as $type) {
            foreach (static::YieldArgsForTypeForFuzzing($type, true) as $args) {
                yield [$type, $args];
            }
        }
    }
}
