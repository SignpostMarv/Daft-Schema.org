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

abstract class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    const DAFT_SCHEMA_FUZZING_VIA_GENERATOR = [
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
            [],
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
        SchemaOrg\Event\PublicationEvent::class => [
            [],
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

    const DAFT_SCHEMA_FUZZING_VIA_GENERATOR_SUPPLEMENTORY = [
        SchemaOrg\Intangible\StructuredValue\PropertyValue::class => [
            'valueReference' => [
                SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class,
                SchemaOrg\Intangible\Enumeration\QualitativeValue::class,
            ],
        ],
        SchemaOrg\CreativeWork::class => [
            'accountablePerson' => [
                SchemaOrg\Person::class,
            ],
            'associatedMedia' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'audio' => [
                SchemaOrg\CreativeWork\MediaObject\AudioObject::class,
            ],
            'character' => [
                SchemaOrg\Person::class,
            ],
            'citation' => [
                SchemaOrg\CreativeWork::class,
            ],
            'comment' => [
                SchemaOrg\CreativeWork\Comment::class,
            ],
            'contentLocation' => [
                SchemaOrg\Place::class,
            ],
            'contentRating' => [
                SchemaOrg\Intangible\Rating::class,
            ],
            'contentReferenceTime' => [
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'contributor' => [
                SchemaOrg\Person::class,
            ],
            'copyrightHolder' => [
                SchemaOrg\Person::class,
                SchemaOrg\Organization::class,
            ],
            'correction' => [
                SchemaOrg\CreativeWork\Comment\CorrectionComment::class,
            ],
            'creator' => [
                SchemaOrg\Person::class,
                SchemaOrg\Organization::class,
            ],
            'dateCreated' => [
                SchemaOrg\DataTypes\Date::class,
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'dateModified' => [
                SchemaOrg\DataTypes\Date::class,
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'datePublished' => [
                SchemaOrg\DataTypes\Date::class,
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'editor' => [
                SchemaOrg\Person::class,
            ],
            'educationalAlignment' => [
                SchemaOrg\Intangible\AlignmentObject::class,
            ],
            'encoding' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'exampleOfWork' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'expires' => [
                SchemaOrg\DataTypes\Date::class,
            ],
            'interactionStatistic' => [
                SchemaOrg\Intangible\StructuredValue\InteractionCounter::class,
            ],
            'isBasedOn' => [
                SchemaOrg\CreativeWork\MediaObject::class,
                SchemaOrg\Product::class,
            ],
            'license' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'locationCreated' => [
                SchemaOrg\Place::class,
            ],
            'mainEntity' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'mentions' => [
                SchemaOrg\Person::class,
            ],
            'producer' => [
                SchemaOrg\Person::class,
                SchemaOrg\Organization::class,
            ],
            'publication' => [
                SchemaOrg\Event\PublicationEvent::class,
            ],
            'publisher' => [
                SchemaOrg\Person::class,
                SchemaOrg\Organization::class,
            ],
            'publisherImprint' => [
                SchemaOrg\Organization::class,
            ],
            'recordedAt' => [
                SchemaOrg\Event\PublicationEvent::class,
            ],
            'releasedEvent' => [
                SchemaOrg\Event\PublicationEvent::class,
            ],
            'sdDatePublished' => [
                SchemaOrg\DataTypes\Date::class,
            ],
            'sdLicense' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'sdPublisher' => [
                SchemaOrg\Person::class,
                SchemaOrg\Organization::class,
            ],
            'sourceOrganization' => [
                SchemaOrg\Organization::class,
            ],
            'spatialCoverage' => [
                SchemaOrg\Place::class,
            ],
            'temporalCoverage' => [
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'timeRequired' => [
                SchemaOrg\Intangible\Quantity\Duration::class,
            ],
            'translationOfWork' => [
                SchemaOrg\CreativeWork\MediaObject::class,
            ],
            'video' => [
                SchemaOrg\CreativeWork\MediaObject\VideoObject::class,
            ],
            'workExample' => [
                SchemaOrg\CreativeWork\MediaObject\VideoObject::class,
            ],
            'workTranslation' => [
                SchemaOrg\CreativeWork\MediaObject\VideoObject::class,
            ],
        ],
        SchemaOrg\CreativeWork\MusicRecording::class => [
            'duration' => [
                SchemaOrg\Intangible\Quantity\Duration::class,
            ],
        ],
        SchemaOrg\CreativeWork\Comment::class => [
            'parentItem' => [
                SchemaOrg\CreativeWork\Question::class,
            ],
        ],
        SchemaOrg\CreativeWork\CorrectionComment::class => [
            'parentItem' => [
                SchemaOrg\CreativeWork\Question::class,
            ],
        ],
        SchemaOrg\Intangible\Rating::class => [
            'author' => [
                SchemaOrg\Person::class,
            ],
        ],
        SchemaOrg\Event\PublicationEvent::class => [
            'publishedBy' => [
                SchemaOrg\Person::class,
                SchemaOrg\Organization::class,
            ],
        ],
        SchemaOrg\Product::class => [
            'releaseDate' => [
                SchemaOrg\DataTypes\Date::class,
            ],
        ],
        SchemaOrg\CreativeWork\MusicPlaylist::class => [
            'track' => [
                SchemaOrg\CreativeWork\MusicRecording::class,
            ],
        ],
        SchemaOrg\CreativeWork\Article\NewsArticle::class => [
            'backstory' => [
                SchemaOrg\CreativeWork\MediaObject\VideoObject::class,
            ],
            'speakable' => [
                SchemaOrg\Intangible\SpeakableSpecification::class,
            ],
        ],
        SchemaOrg\CreativeWork\Dataset::class => [
            'distribution' => [
                SchemaOrg\CreativeWork\MediaObject\DataDownload::class,
            ],
            'variableMeasured' => [
                SchemaOrg\Intangible\StructuredValue\PropertyValue::class,
            ],
            'includedInDataCatalog' => [
                SchemaOrg\CreativeWork\DataCatalog::class,
            ],
        ],
        SchemaOrg\CreativeWork\DataCatalog::class => [
            'dataset' => [
                SchemaOrg\CreativeWork\Dataset::class,
            ],
        ],
        SchemaOrg\Intangible\DataFeedItem::class => [
            'dateCreated' => [
                SchemaOrg\DataTypes\Date::class,
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'dateDeleted' => [
                SchemaOrg\DataTypes\Date::class,
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'dateModified' => [
                SchemaOrg\DataTypes\Date::class,
                SchemaOrg\DataTypes\DateTime::class,
            ],
            'item' => [
                SchemaOrg\Intangible\Enumeration\QualitativeValue::class,
            ],
        ],
        SchemaOrg\CreativeWork\Dataset\DataFeed::class => [
            'dataFeedElement' => [
                SchemaOrg\Intangible\DataFeedItem::class,
                SchemaOrg\Intangible\Enumeration\QualitativeValue::class,
            ],
        ],
        SchemaOrg\Intangible\SpeakableSpecification::class => [
            'cssSelector' => [
                SchemaOrg\DataTypes\DataType\Text\CssSelectorType::class,
            ],
            'xpath' => [
                SchemaOrg\DataTypes\DataType\Text\XPathType::class,
            ],
        ],
    ];

    /**
    * @psalm-param class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType> $type
    * @psalm-param array<int, class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType>> $skip_these_types
    *
    * @psalm-return Generator<int, array<string, scalar|array|object|null>, mixed, void>
    */
    protected static function YieldArgsForTypeForFuzzing(string $type, array $skip_these_types = []) : Generator
    {
        foreach ((self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR[$type] ?? []) as $args) {
            foreach (self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR as $gimme => $some_more_args) {
                if ($type !== $gimme && is_a($type, $gimme, true)) {
                    foreach ($some_more_args as $prop => $val) {
                        $args[$prop] = $val;
                    }
                }
            }

            yield $args;
        }

        $args = [];

        foreach (self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR_SUPPLEMENTORY as $gimme => $of_type) {
            /*
            if (is_a($type, $gimme, true)) {
                */
            if ($gimme !== $type) {
                foreach ($of_type as $property => $types) {
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
                /*
            }
            */
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
    * @param array<int, string> $skip_these_types
    *
    * @psalm-param array<int, class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType>> $types
    * @psalm-param array<int, class-string<SchemaOrg\Thing>|class-string<SchemaOrg\DataTypes\DataType>> $skip_these_types
    *
    * @psalm-return Generator<int, SchemaOrg\Thing|SchemaOrg\DataTypes\DataType, mixed, void>
    */
    protected static function YieldObjectsOfTypeForFuzzing(
        array $types,
        array $skip_these_types = []
    ) : Generator {
        $types = array_filter($types, function (string $maybe) use ($skip_these_types) : bool {
            return ! in_array($maybe, $skip_these_types, true);
        });

        foreach ($types as $gimme) {
            $skip_these_types[] = $gimme;



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
                /*
                foreach (static::YieldArgsForTypeForFuzzing($gimme) as $args) {
                    if (isset(self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR_SUPPLEMENTORY[$gimme])) {
                        foreach (
                            self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR_SUPPLEMENTORY[$gimme] as $prop => $types
                        ) {
                            if ( ! isset($args[$prop])) {
                                $args[$prop] = [];
                            }

                            foreach (
                                static::YieldObjectsOfTypeForFuzzing(
                                    $types,
                                    $skip_these_types
                                ) as $supplementory_value
                            ) {
                                $args[$prop][] = $supplementory_value;
                            }
                        }
                    }
                }
                */

                $args = [];

                foreach (self::DAFT_SCHEMA_FUZZING_VIA_GENERATOR as $upstream => $some_more_args) {
                    /*
                    if (is_a($gimme, $upstream, true)) {
                        */
                    if ($upstream !== $gimme) {
                        foreach ($some_more_args as $prop => $supplementory_values) {
                            if ( ! isset($args[$prop])) {
                                $args[$prop] = [];
                            }

                            $args[$prop] = array_merge($args[$prop], $supplementory_values);
                        }
                    }
                        /*
                    }
                    */
                }

                yield new $gimme($args);
            }
        }
    }

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        $type = static::FuzzingImplementationsViaGeneratorRootType();

            foreach (static::YieldArgsForTypeForFuzzing($type) as $args) {
                yield [$type, $args];
            }
    }

    abstract protected static function FuzzingImplementationsViaGeneratorRootType() : string;
}
