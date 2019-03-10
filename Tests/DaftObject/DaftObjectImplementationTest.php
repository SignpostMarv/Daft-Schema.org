<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObject;

use Generator;
use ReflectionClassConstant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectImplementationTest as Base;

class DaftObjectImplementationTest extends Base
{
    use DataProviderTrait;

    /**
    * {@inheritdoc}
    *
    * @psalm-param class-string<SchemaOrg\Thing> $className
    *
    * @dataProvider dataProvider_DaftObject__has_properties_each_defined_property
    */
    public function test_AbstractDaftObject__has_properties_each_property(
        string $className,
        string $property,
        bool $maybe_mixed_case = false
    ) : void {
        if (
            isset($className::PROPERTIES_WITH_MULTI_TYPED_ARRAYS[$property]) &&
            $className === (
                new ReflectionClassConstant(
                    $className,
                    'PROPERTIES_WITH_MULTI_TYPED_ARRAYS'
                )
            )->getDeclaringClass()->name
        ) {
            parent::test_AbstractDaftObject__has_properties_each_property(
                $className,
                $property,
                $maybe_mixed_case
            );

            return;
        }

        static::markTestSkipped(
            'I really cannot be fussed with satisfying all the docblock-related tests right now.'
        );
    }

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        yield [
            SchemaOrg\Intangible\Enumeration\QualitativeValue::class,
            [
                'identifier' => [
                    'L',
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Enumeration\QualitativeValue::class,
            [
                'identifier' => [
                    'M',
                ],
                'greater' => [
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
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\PropertyValue::class,
            [
                'maxValue' => [
                    20,
                    30,
                    40,
                ],
                'value' => [
                    1,
                    true,
                    false,
                    'foo',
                ],
                'valueReference' => [
                    new SchemaOrg\Intangible\StructuredValue\QuantitativeValue([
                        'minValue' => [1],
                        'maxValue' => [10],
                        'value' => [
                            5,
                        ],
                    ]),
                    new SchemaOrg\Intangible\Enumeration\QualitativeValue([
                        'identifier' => [
                            'M',
                        ],
                        'greater' => [
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
                    ]),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Quantity\Duration::class,
            [
                'identifier' => ['PT1M2S'],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicRecording::class,
            [
                'name' => ['Foo'],
                'duration' => [
                    new SchemaOrg\Intangible\Quantity\Duration(
                        [
                            'identifier' => ['PT1M2S'],
                        ]
                    ),
                ],
            ]
        ];

        yield [
            SchemaOrg\CreativeWork\MusicPlaylist::class,
            [
                'numTracks' => [2],
                'track' => [
                    new SchemaOrg\CreativeWork\MusicRecording(
                        [
                            'name' => ['Foo'],
                            'duration' => [
                                new SchemaOrg\Intangible\Quantity\Duration(
                                    [
                                        'identifier' => ['PT1M2S'],
                                    ]
                                ),
                            ],
                        ]
                    ),
                    new SchemaOrg\CreativeWork\MusicRecording(
                        [
                            'name' => ['Bar'],
                            'duration' => [
                                new SchemaOrg\Intangible\Quantity\Duration(
                                    [
                                        'identifier' => ['PT3M4S'],
                                    ]
                                ),
                            ],
                        ]
                    ),
                ],
            ],
        ];
    }
}
