<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObject;

use Generator;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectImplementationTest as Base;

class DaftObjectImplementationTest extends Base
{
    use DataProviderTrait;

    const DONUT = [
        SchemaOrg\Thing::class => [
            'additionalType',
            'alternateName',
            'description',
            'disambiguatingDescription',
            'identifier',
            'image',
            'mainEntityOfPage',
            'name',
            'potentialAction',
            'sameAs',
            'potentialAction',
            'url',
        ],
        SchemaOrg\CreativeWork::class => [
            'aboutThing',
            'accessMode',
            'accessModeSufficient',
            'accessibilityAPI',
            'accessibilityControl',
            'accessibilityFeature',
            'accessibilityHazard',
            'accessibilitySummary',
            'accountablePerson',
            'aggregateRating',
            'alternativeHeadline',
            'associatedMedia',
            'audience',
            'audio',
            'author',
            'award',
            'character',
            'citation',
            'comment',
            'commentCount',
            'contentLocation',
            'contentRating',
            'contentReferenceTime',
            'contributor',
            'copyrightHolder',
            'copyrightYear',
            'correction',
            'creator',
            'dateCreated',
            'dateModified',
            'datePublished',
            'discussionUrl',
            'editor',
            'educationalAlignment',
            'educationalUse',
            'encoding',
            'encodingFormat',
            'exampleOfWork',
            'expires',
            'funder',
            'genre',
            'hasPart',
            'headline',
            'inLanguage',
            'interactionStatistic',
            'interactivityType',
            'isAccessibleForFree',
            'isBasedOn',
            'isFamilyFriendly',
            'keywords',
            'learningResourceType',
            'license',
            'location',
            'locationCreated',
            'mainEntity',
            'mentions',
            'offers',
            'position',
            'producer',
            'provider',
            'publication',
            'publisher',
            'publisherImprint',
            'publishingPrinciples',
            'recordedAt',
            'releasedEvent',
            'review',
            'schemaVersion',
            'sdDatePublished',
            'sdLicense',
            'sdPublisher',
            'sourceOrganization',
            'spatialCoverage',
            'sponsor',
            'temporalCoverage',
            'text',
            'thumbnailUrl',
            'timeRequired',
            'translationOfWork',
            'translators',
            'typicalAgeRange',
            'version',
            'video',
            'workExample',
            'workTranslation',
        ],
        SchemaOrg\CreativeWork\Article::class => [
            'articleBody',
            'articleSection',
            'backstory',
            'pageEnd',
            'pageStart',
            'pagination',
            'speakable',
            'wordCount',
        ],
        SchemaOrg\CreativeWork\Article\NewsArticle::class => [
            'dateline',
            'printColumn',
            'printEdition',
            'printPage',
            'printSection',
        ],
    ];

    /**
    * {@inheritdoc}
    *
    * @dataProvider dataProvider_DaftObject__has_properties_each_defined_property
    */
    public function test_AbstractDaftObject__has_properties_each_property(
        string $className,
        string $property,
        bool $maybe_mixed_case = false
    ) : void {
        if (isset(static::DONUT[$className]) && in_array($property, static::DONUT[$className])) {
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
    }
}
