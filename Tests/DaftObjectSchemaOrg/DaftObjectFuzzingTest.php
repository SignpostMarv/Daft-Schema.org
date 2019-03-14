<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use InvalidArgumentException;
use Generator;
use ReflectionClassConstant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectFuzzingTest as Base;

class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    const DAFT_SCHEMA_FUZZING_VIA_GENERATOR = [
        SchemaOrg\Thing::class => [
            [
                'name' => ['Foo'],
            ],
        ],
        SchemaOrg\Intangible\Enumeration\QualitativeValue::class => [
            [
                'identifier' => [
                    'L',
                ],
            ],
        ],
        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class => [
            [
                'minValue' => [1],
                'maxValue' => [10],
                'value' => [
                    5,
                ],
            ],
        ],
        SchemaOrg\Intangible\StructuredValue\PropertyValue::class => [
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
            ],
        ],
        SchemaOrg\Intangible\Quantity\Duration::class => [
            [
                'identifier' => ['PT1M2S'],
            ],
        ],
        SchemaOrg\CreativeWork\MusicRecording::class => [
            [
                'name' => ['Foo'],
            ],
        ],
        SchemaOrg\Person::class => [
            [
                'name' => ['Foo Bar'],
            ],
        ],
        SchemaOrg\CreativeWork::class => [
            'accessMode' => ['Foo'],
            'accessModeSufficient' => ['Bar'],
            'accessibilityAPI' => ['Baz'],
            'accessibilityControl' => ['Bat'],
            'accessibilityFeature' => ['Bag'],
            'accessibilityHazard' => ['Foo Bar'],
            'accessibilitySummary' => ['Bar Baz'],
            'alternativeHeadline' => ['Baz Bat'],
            'citation' => [
                'Foo',
            ],
            'commentCount' => [3],
            'copyrightYear' => [
                1970,
            ],
            'correction' => [
                'Baz',
            ],
            'discussionUrl' => [
                'https://example.com/',
            ],
            'educationalUse' => [
                'Baz',
            ],
            'encodingFormat' => [
                'Bat',
            ],
            'headline' => [
                'Bag',
            ],
            'interactivityType' => [
                'Foo Bar',
            ],
            'isBasedOn' => [
                'Bar Baz',
            ],
            'isFamilyFriendly' => [
                true,
            ],
            'keywords' => [
                'Bar Baz',
            ],
            'learningResourceType' => [
                'Baz Bat',
            ],
            'license' => [
                'Bat Bag',
            ],
            'position' => [
                1,
                'ii',
                3,
                'iv',
                5,
                'vi',
            ],
            'schemaVersion' => [
                '0.0.0',
            ],
            'sdLicense' => [
                'Bat Bag',
            ],
            'temporalCoverage' => [
                'January 1st 1970 01:02:03',
            ],
            'text' => [
                'Foo Bar Baz',
            ],
            'thumbnailUrl' => [
                'https://example.com/',
            ],
            'version' => [
                0,
                '0.0.0',
            ],
        ],
        SchemaOrg\CreativeWork\MediaObject::class => [
            [
                'associatedArticle' => [],
                'bitrate' => ['1kbps'],
                'contentSize' => ['2kb'],
                'contentUrl' => ['https://example.com/'],
                'duration' => [],
                'embedUrl' => ['https://example.com/'],
                'encodingFormat' => ['lol/whut'],
                'height' => [],
                'playerType' => ['vlc'],
                'productionCompany' => [],
                'regionsAllowed' => [],
                'requiresSubscription' => [true],
                'uploadDate' => [],
                'width' => [],
            ],
        ],
        SchemaOrg\CreativeWork\MediaObject\AudioObject::class => [
            [
                'name' => ['audio'],
            ],
        ],
        SchemaOrg\CreativeWork\MediaObject\ImageObject::class => [
            [
                'caption' => ['Foo'],
                'exifData' => ['Bar'],
                'representativeOfPage' => [true],
            ],
        ],
        SchemaOrg\CreativeWork\MediaObject\VideoObject::class => [
            [
                'name' => ['video'],
                'videoFrameSize' => ['1920x1080'],
                'videoQuality' => ['Foo'],
            ],
        ],
        SchemaOrg\CreativeWork\Question::class => [
            [
                'downvoteCount' => [1],
                'upvoteCount' => [2],
            ],
        ],
        SchemaOrg\CreativeWork\Comment::class => [
            [
                'downvoteCount' => [1],
                'upvoteCount' => [2],
            ],
        ],
        SchemaOrg\CreativeWork\Comment\CorrectionComment::class => [
            [
                'downvoteCount' => [1],
                'upvoteCount' => [2],
            ],
        ],
        SchemaOrg\Place::class => [
            [
                'name' => ['Bar Baz'],
            ],
        ],
        SchemaOrg\Intangible\Rating::class => [
            [
                'bestRating' => [4, '4/5', 0.8],
                'ratingValue' => [2.5],
                'reviewAspect' => ['Foo'],
                'wostRating' => [1, '1/5', 0.2],
            ],
        ],
        SchemaOrg\Organization::class => [
            [
            'name' => ['Baz Bat'],
            ],
        ],
        SchemaOrg\Intangible\AlignmentObject::class => [
            [
                'targetUrl' => [
                    'https://example.com/',
                ],
            ],
        ],
        SchemaOrg\Intangible\StructuredValue\InteractionCounter::class => [
            [
                'userInteractionCount' => [3],
            ],
        ],
        SchemaOrg\Event::class => [
            [
                'name' => ['Foo'],
                'remainingAttendeeCapacity' => [1],
            ],
        ],
        SchemaOrg\Event\PublicationEvent::class => [
            [
                'name' => ['Foo'],
            ],
        ],
        SchemaOrg\Product::class => [
            [
                'name' => ['Product']
            ],
        ],
        SchemaOrg\CreativeWork\MusicPlaylist::class => [
            [
                'numTracks' => [2],
            ],
        ],
        SchemaOrg\Intangible\SpeakableSpecification::class => [
            [],
        ],
        SchemaOrg\CreativeWork\Article\NewsArticle::class => [
            [
                'dateline' => ['Foo, Bar, January 1st 1970'],
                'printColumn' => ['Foo'],
                'printEdition' => ['Bar'],
                'printPage' => ['Baz'],
                'printSection' => ['Bat'],
                'articleBody' => ['Bag'],
                'articleSection' => ['Foo Bar'],
                'backstory' => [
                    'Bar Baz',
                ],
                'pageEnd' => [
                    2,
                    'ii',
                ],
                'pageStart' => [
                    1,
                    'i',
                ],
                'pagination' => [
                    '1-2',
                    'i-ii',
                ],
                'wordCount' => [
                    0,
                ],
            ],
        ],
        SchemaOrg\CreativeWork\MediaObject\DataDownload::class => [
            [
                'name' => ['Foo'],
                'measurementTechnique' => ['Foo'],
            ],
        ],
        SchemaOrg\CreativeWork\Dataset::class => [
            [
                'issn' => [
                    'Foo',
                ],
                'measurementTechnique' => [
                    'Bar',
                ],
                'variableMeasured' => [
                    'Baz',
                ],
            ],
        ],
        SchemaOrg\CreativeWork\DataCatalog::class => [
            [
                'measurementTechnique' => [
                    'Bag',
                ],
            ],
        ],
        SchemaOrg\Intangible\DataFeedItem::class => [
            [],
        ],
        SchemaOrg\CreativeWork\Dataset\DataFeed::class => [
            [
                'dataFeedElement' => [
                    'Foo',
                ],
            ],
        ],
    ];

    /**
    * @psalm-param class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType> $type
    *
    * @psalm-return Generator<int, array<string, scalar|array|object|null>, mixed, void>
    */
    protected static function YieldArgsForTypeForFuzzing(string $type, bool $deep = false) : Generator
    {
        $args = [];

        foreach ((self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR[$type] ?? []) as $args) {
            foreach (self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR as $gimme => $some_more_args) {
                if ($type !== $gimme && is_a($type, $gimme, true)) {
                    foreach ($some_more_args as $prop => $val) {
                        $args[$prop] = $val;
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

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        foreach (array_keys(self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR) as $type) {
            foreach (static::YieldArgsForTypeForFuzzing($type, true) as $args) {
                yield [$type, $args];
            }
        }
    }
}
