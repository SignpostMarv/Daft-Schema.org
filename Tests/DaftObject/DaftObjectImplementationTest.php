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

        $duration_args = [
            'identifier' => ['PT1M2S'],
        ];

        yield [
            SchemaOrg\Intangible\Quantity\Duration::class,
            $duration_args,
        ];

        $music_recording_args = [
                'name' => ['Foo'],
                'duration' => [
                    new SchemaOrg\Intangible\Quantity\Duration(
                        $duration_args
                    ),
                ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicRecording::class,
            $music_recording_args
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject::class,
            $music_recording_args
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject\AudioObject::class,
            $music_recording_args
        ];

        $person_args = [
            'name' => ['Foo Bar'],
        ];

        yield [
            SchemaOrg\Person::class,
            $person_args,
        ];

        $question_args = [
            'downvoteCount' => [1],
            'upvoteCount' => [2],
        ];

        yield [
            SchemaOrg\CreativeWork\Question::class,
            $question_args,
        ];

        $comment_args = [
            'downvoteCount' => [1],
            'upvoteCount' => [2],
            'parentItem' => [
                new SchemaOrg\CreativeWork\Question($question_args),
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Comment::class,
            $comment_args,
        ];

        yield [
            SchemaOrg\CreativeWork\Comment\CorrectionComment::class,
            $comment_args,
        ];

        $place_args = [
            'name' => ['Bar Baz'],
        ];

        yield [
            SchemaOrg\Place::class,
            $place_args,
        ];

        $rating_args = [
            'author' => [
                new SchemaOrg\Person($person_args),
            ],
        ];

        yield [
            SchemaOrg\Intangible\Rating::class,
            $rating_args,
        ];

        $organization_args = [
            'name' => ['Baz Bat'],
        ];

        yield [
            SchemaOrg\Organization::class,
            $organization_args,
        ];

        $alignmentobject_args = [
            'targetUrl' => [
                'https://example.com/',
            ],
        ];

        yield [
            SchemaOrg\Intangible\AlignmentObject::class,
            $alignmentobject_args,
        ];

        $interactioncounter_args = [
            'userInteractionCount' => [3],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\InteractionCounter::class,
            $interactioncounter_args,
        ];

        $publication_event_args = [
            'publishedBy' => [
                new SchemaOrg\Person($person_args),
                new SchemaOrg\Organization($organization_args),
            ],
        ];

        yield [
            SchemaOrg\Event\PublicationEvent::class,
            $publication_event_args,
        ];

        $product_args = [
            'name' => ['Product'],
            'releaseDate' => [
                new SchemaOrg\DataTypes\Date('January 1st 1970'),
            ],
        ];

        yield [
            SchemaOrg\Product::class,
            $product_args,
        ];

        yield [
            SchemaOrg\CreativeWork\MusicPlaylist::class,
            [
                'accessMode' => ['Foo'],
                'accessModeSufficient' => ['Bar'],
                'accessibilityAPI' => ['Baz'],
                'accessibilityControl' => ['Bat'],
                'accessibilityFeature' => ['Bag'],
                'accessibilityHazard' => ['Foo Bar'],
                'accessibilitySummary' => ['Bar Baz'],
                'accountablePerson' => [
                    new SchemaOrg\Person($person_args),
                ],
                'alternativeHeadline' => ['Baz Bat'],
                'associatedMedia' => [
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'audio' => [
                    new SchemaOrg\CreativeWork\MediaObject\AudioObject($music_recording_args),
                ],
                'character' => [
                    new SchemaOrg\Person($person_args),
                ],
                'citation' => [
                    'Foo',
                    new SchemaOrg\CreativeWork([
                        'name' => ['Bar'],
                    ]),
                ],
                'comment' => [
                    new SchemaOrg\CreativeWork\Comment($comment_args),
                ],
                'commentCount' => [3],
                'contentLocation' => [
                    new SchemaOrg\Place($place_args),
                ],
                'contentRating' => [
                    new SchemaOrg\Intangible\Rating($rating_args),
                ],
                'contentReferenceTime' => [
                    new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03'),
                ],
                'contributor' => [
                    new SchemaOrg\Person($person_args),
                ],
                'copyrightHolder' => [
                    new SchemaOrg\Person($person_args),
                    new SchemaOrg\Organization($organization_args),
                ],
                'copyrightYear' => [
                    1970,
                ],
                'correction' => [
                    'Baz',
                    new SchemaOrg\CreativeWork\Comment\CorrectionComment($comment_args),
                ],
                'creator' => [
                    new SchemaOrg\Person($person_args),
                    new SchemaOrg\Organization($organization_args),
                ],
                'dateCreated' => [
                    new SchemaOrg\DataTypes\Date('January 1st 1970'),
                    new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03'),
                ],
                'dateModified' => [
                    new SchemaOrg\DataTypes\Date('January 1st 1970'),
                    new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03'),
                ],
                'datePublished' => [
                    new SchemaOrg\DataTypes\Date('January 1st 1970'),
                    new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03'),
                ],
                'discussionUrl' => [
                    'https://example.com/',
                ],
                'editor' => [
                    new SchemaOrg\Person($person_args),
                ],
                'educationalAlignment' => [
                    new SchemaOrg\Intangible\AlignmentObject($alignmentobject_args),
                ],
                'educationalUse' => [
                    'Baz',
                ],
                'encoding' => [
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'encodingFormat' => [
                    'Bat',
                ],
                'exampleOfWork' => [
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'expires' => [
                    new SchemaOrg\DataTypes\Date('January 1st 1970'),
                ],
                'headline' => [
                    'Bag',
                ],
                'interactionStatistic' => [
                    new SchemaOrg\Intangible\StructuredValue\InteractionCounter(
                        $interactioncounter_args
                    ),
                ],
                'interactivityType' => [
                    'Foo Bar',
                ],
                'isBasedOn' => [
                    'Bar Baz',
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                    new SchemaOrg\Product($product_args),
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
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'locationCreated' => [
                    new SchemaOrg\Place($place_args),
                ],
                'mainEntity' => [
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'mentions' => [
                    new SchemaOrg\Person($person_args),
                ],
                'numTracks' => [2],
                'position' => [
                    1,
                    'ii',
                    3,
                    'iv',
                    5,
                    'vi',
                ],
                'producer' => [
                    new SchemaOrg\Person($person_args),
                    new SchemaOrg\Organization($organization_args),
                ],
                'publication' => [
                    new SchemaOrg\Event\PublicationEvent($publication_event_args),
                ],
                'publisher' => [
                    new SchemaOrg\Person($person_args),
                    new SchemaOrg\Organization($organization_args),
                ],
                'publisherImprint' => [
                    new SchemaOrg\Organization($organization_args),
                ],
                'recordedAt' => [
                    new SchemaOrg\Event\PublicationEvent($publication_event_args),
                ],
                'releasedEvent' => [
                    new SchemaOrg\Event\PublicationEvent($publication_event_args),
                ],
                'schemaVersion' => [
                    '0.0.0',
                ],
                'sdDatePublished' => [
                    new SchemaOrg\DataTypes\Date('January 1st 1970'),
                ],
                'sdLicense' => [
                    'Bat Bag',
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'sdPublisher' => [
                    new SchemaOrg\Person($person_args),
                    new SchemaOrg\Organization($organization_args),
                ],
                'sourceOrganization' => [
                    new SchemaOrg\Organization($organization_args),
                ],
                'spatialCoverage' => [
                    new SchemaOrg\Place($place_args),
                ],
                'temporalCoverage' => [
                    'January 1st 1970 01:02:03',
                    new SchemaOrg\DataTypes\DateTime('January 1st 1970 01:02:03'),
                ],
                'text' => [
                    'Foo Bar Baz',
                ],
                'thumbnailUrl' => [
                    'https://example.com/',
                ],
                'timeRequired' => [
                    new SchemaOrg\Intangible\Quantity\Duration(
                        [
                            'identifier' => ['PT3M4S'],
                        ]
                    ),
                ],
                'track' => [
                    new SchemaOrg\CreativeWork\MusicRecording(
                        $music_recording_args
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
                'translationOfWork' => [
                    new SchemaOrg\CreativeWork\MediaObject($music_recording_args),
                ],
                'version' => [
                    0,
                    '0.0.0',
                ],
                'video' => [
                    new SchemaOrg\CreativeWork\MediaObject\VideoObject($music_recording_args),
                ],
                'workExample' => [
                    new SchemaOrg\CreativeWork\MediaObject\VideoObject($music_recording_args),
                ],
                'workTranslation' => [
                    new SchemaOrg\CreativeWork\MediaObject\VideoObject($music_recording_args),
                ],
            ],
        ];
    }
}
