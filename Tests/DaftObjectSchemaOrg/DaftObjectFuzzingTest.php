<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use CallbackFilterIterator;
use Generator;
use RecursiveCallbackFilterIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use ReflectionClassConstant;
use RuntimeException;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectFuzzingTest as Base;

class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    /**
    * @var array
    */
    private static $cache = [];

    /**
    * @var array
    */
    private static $deep_cache = [];

    /**
    * @var array<string, (SchemaOrg\Thing|SchemaOrg\DataTypes\DataType)[]>
    */
    private static $obj_cache = [];

    /**
    * @var array<string, (SchemaOrg\Thing|SchemaOrg\DataTypes\DataType)[]>
    */
    private static $obj_deep_cache = [];

    /**
    * @var array
    */
    private static $fuzzing_cache = [];

    /**
    * @var array
    */
    private static $YieldTypeForFuzzing = [];

    /**
    * @var bool
    */
    private static $last_boolean = false;

    /**
    * @psalm-param class-string<SchemaOrg\Thing> $type
    *
    * @psalm-return Generator<int, array<string, scalar|array|object|null>, mixed, void>
    */
    protected static function YieldArgsForTypeForFuzzing(string $type, bool $deep = false) : Generator
    {
        /**
        * @var array<string, array<int, scalar|array|object|null>>
        */
        $args = $deep ? (self::$deep_cache[$type] ?? []) : (self::$cache[$type] ?? []);

        if ($deep && ! isset(self::$deep_cache[$type])) {
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

                /**
                * @var string[]
                *
                * @psalm-var array<int, class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType>>
                */
                $sub_types = [];

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
                                $args[$property][] = self::$last_boolean;
                                self::$last_boolean = ! self::$last_boolean;
                                break;
                            default:
                                throw new RuntimeException('Unsupported type: ' . $sub_type);
                                break;
                        }
                    } elseif (
                        is_a($sub_type, SchemaOrg\Thing::class, true) ||
                        is_a($sub_type, SchemaOrg\DataTypes\DataType::class, true)
                    ) {
                        /**
                        * @var string
                        *
                        * @psalm-var class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType>
                        */
                        $sub_type = $sub_type;

                        $sub_types[] = $sub_type;
                    }
                }

                foreach (static::YieldCachedObjectsOfTypeForFuzzing($sub_types) as $obj) {
                    if ( ! in_array($obj, $args[$property], true)) {
                        $args[$property][] = $obj;
                    }
                }
            }

            $const = new ReflectionClassConstant($type, 'PROPERTIES_WITH_MULTI_TYPED_ARRAYS');

            foreach (array_keys($args) as $property) {
                if (
                    $type === $const->getDeclaringClass()->name
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

        if (SchemaOrg\Intangible\Enumeration\QualitativeValue::class === $type) {
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
    */
    protected static function YieldObjectsOfTypeForFuzzing(
        array $types,
        bool $deep = false
    ) : Generator {
        /**
        * @psalm-var array<int, class-string<SchemaOrg\DataTypes\DataType>>
        */
        $data_types = [];

        /**
        * @psalm-var array<int, class-string<SchemaOrg\Thing>>
        */
        $thing_types = [];

        foreach ($types as $type) {
            if (is_a($type, SchemaOrg\DataTypes\DataType::class, true)) {
                $data_types[] = $type;
            } elseif (is_a($type, SchemaOrg\Thing::class, true)) {
                $thing_types[] = $type;
            }
        }

        foreach ($data_types as $gimme) {
            if (SchemaOrg\DataTypes\Date::class === $gimme) {
                yield new SchemaOrg\DataTypes\Date('January 1st 1970');
            } elseif (SchemaOrg\DataTypes\DateTime::class === $gimme) {
                yield new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03');
            } elseif (SchemaOrg\DataTypes\Time::class === $gimme) {
                yield new SchemaOrg\DataTypes\Time('01:02:03');
            } elseif (SchemaOrg\DataTypes\DataType\Text\CssSelectorType::class === $gimme) {
                yield SchemaOrg\DataTypes\DataType\Text\CssSelectorType::DataTypeFromString(
                    '.foo'
                );
            } elseif (SchemaOrg\DataTypes\DataType\Text\XPathType::class === $gimme) {
                yield SchemaOrg\DataTypes\DataType\Text\XPathType::DataTypeFromString('//foo');
            }
        }

        foreach ($thing_types as $gimme) {
            if (
                ! ($reflector = new ReflectionClass($gimme))->isAbstract()
            ) {
                foreach (static::YieldArgsForTypeForFuzzing($gimme) as $args) {
                    /**
                    * @var SchemaOrg\Thing
                    */
                    $obj = $reflector->newInstance($args);

                    yield $obj;
                }
            }
        }
    }

    /**
    * @param string[] $types
    *
    * @psalm-return Generator<int, SchemaOrg\Thing|SchemaOrg\DataTypes\DataType, mixed, void>
    */
    protected static function YieldCachedObjectsOfTypeForFuzzing(
        array $types,
        bool $deep = false,
        array $skip_these = []
    ) : Generator {
        $yield_count = [];

        if ($deep) {
            foreach ($types as $gimme) {
                if ( ! isset(self::$obj_deep_cache[$gimme])) {
                    self::$obj_deep_cache[$gimme] = iterator_to_array(
                        static::YieldObjectsOfTypeForFuzzing([$gimme], $deep)
                    );
                }

                yield from self::$obj_deep_cache[$gimme];

                if (count(self::$obj_deep_cache[$gimme]) > 0) {
                    $yield_count[$gimme] = ($yield_count[$gimme] ?? 0) + 1;
                } else {
                    $yield_count[$gimme] = $yield_count[$gimme] ?? 0;
                }
            }
        } else {
            foreach ($types as $gimme) {
                if ( ! isset(self::$obj_cache[$gimme])) {
                    self::$obj_cache[$gimme] = iterator_to_array(
                        static::YieldObjectsOfTypeForFuzzing([$gimme], $deep)
                    );
                }

                yield from self::$obj_cache[$gimme];

                if (count(self::$obj_cache[$gimme]) > 0) {
                    $yield_count[$gimme] = ($yield_count[$gimme] ?? 0) + 1;
                } else {
                    $yield_count[$gimme] = $yield_count[$gimme] ?? 0;
                }
            }
        }

        /**
        * @var array<int, string>
        *
        * @psalm-var array<int, class-string<SchemaOrg\Thing>>
        */
        $recheck_with_these = [];

        foreach ($yield_count as $gimme => $count) {
            if ($count < 1) {
                foreach (static::YieldTypeForFuzzing() as $gimme_again) {
                    if (
                        ! in_array($gimme_again, $skip_these, true) &&
                        is_a($gimme_again, $gimme, true)
                    ) {
                        /**
                        * @var string
                        *
                        * @psalm-var class-string<SchemaOrg\Thing>
                        */
                        $gimme_again = $gimme_again;

                        $recheck_with_these[] = $gimme_again;
                    }
                }
            } elseif ( ! in_array($gimme, $skip_these, true)) {
                $skip_these[] = $gimme;
            }
        }

        if (count($recheck_with_these) > 0) {
            yield from static::YieldCachedObjectsOfTypeForFuzzing(
                $recheck_with_these,
                $deep,
                $skip_these
            );
        }
    }

    /**
    * @psalm-return Generator<int, class-string<SchemaOrg\Thing>, mixed, void>
    */
    protected static function YieldTypeForFuzzing() : Generator
    {
        if (count(self::$YieldTypeForFuzzing) > 0) {
            yield from self::$YieldTypeForFuzzing;

            return;
        }

        /**
        * @var iterable<string>
        */
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

        $cache = [];

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
                        /**
                        * @psalm-var class-string<SchemaOrg\Thing>
                        */
                        $out = $reflector->name;

                        if ( ! in_array($out, $cache, true)) {
                            $cache[] = $out;
                        }

                        yield $out;
                    }
                }
            }
        }

        self::$YieldTypeForFuzzing = $cache;
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
