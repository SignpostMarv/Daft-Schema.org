<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use CallbackFilterIterator;
use Generator;
use InvalidArgumentException;
use RecursiveCallbackFilterIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use ReflectionClassConstant;
use RuntimeException;
use SignpostMarv\DaftObject\DefinitionAssistant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\SchemaOrgLookup\Lookup_a2b5f59b072eb4f0e36f78a746b715700e835d2e9c730b70f6a3227ea7e43dbe964c346da3d654c7a5aa9631a79f6c57d702a01474263806629abb2a304f77e1 as SchemaOrgLookupThing;
use SignpostMarv\DaftObject\SchemaOrgLookup\LookupInterface;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectFuzzingTest as Base;

class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        yield [
            SchemaOrg\Thing::class,
            [
                'additionalType' => [
                    SchemaOrg\Action::SCHEMA_ORG_TYPE,
                ],
                'alternateName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'description' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'disambiguatingDescription' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'identifier' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
                'image' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MediaObject\ImageObject::class),
                ],
                'mainEntityOfPage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'name' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'potentialAction' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Action::class),
                ],
                'sameAs' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'subjectOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'url' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Action::class,
            [
                'actionStatus' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Enumeration\ActionStatusType::class),
                ],
                'agent' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'endTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'error' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'instrument' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'location' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'object' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'participant' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'result' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'startTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'target' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\EntryPoint::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Audience::class,
            [
                'audienceType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'geographicArea' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork::class,
            [
                'about' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'accessMode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessModeSufficient' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityAPI' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityControl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityFeature' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityHazard' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilitySummary' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accountablePerson' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'alternativeHeadline' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'associatedMedia' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MediaObject::class),
                ],
                'audience' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Audience::class),
                ],
                'audio' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\AudioObject::class
                    ),
                ],
                'author' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'award' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'character' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'citation' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'comment' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Comment::class),
                ],
                'commentCount' => [
                    random_int(0, 100),
                ],
                'contentLocation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'contentRating' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Rating::class),
                ],
                'contentReferenceTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'contributor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'copyrightHolder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'copyrightYear' => [
                    random_int(1923, 2073),
                ],
                'correction' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\Comment\CorrectionComment::class
                    ),
                ],
                'creator' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'datePublished' => [
                    static::FuzzFreshSchemaOrgDate(),
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'discussionUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'editor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'educationalAlignment' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\AlignmentObject::class),
                ],
                'educationalUse' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'encoding' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MediaObject::class),
                ],
                'encodingFormat' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'exampleOfWork' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'expires' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'funder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'genre' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'hasPart' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Trip::class),
                ],
                'headline' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'inLanguage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Language::class),
                ],
                'interactionStatistic' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\InteractionCounter::class
                    ),
                ],
                'interactivityType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'isAccessibleForFree' => [
                    true,
                ],
                'isBasedOn' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'isFamilyFriendly' => [
                    false,
                ],
                'isPartOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Trip::class),
                ],
                'keywords' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'learningResourceType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'license' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'location' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'locationCreated' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'mainEntity' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'material' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'mentions' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'offers' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'position' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'producer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'provider' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'publication' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event\PublicationEvent::class),
                ],
                'publisher' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'publisherImprint' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'publishingPrinciples' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'recordedAt' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'releasedEvent' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event\PublicationEvent::class),
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                'schemaVersion' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'sdDatePublished' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'sdLicense' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'sdPublisher' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'sourceOrganization' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'spatialCoverage' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'sponsor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'temporalCoverage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'text' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'thumbnailUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'timeRequired' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Duration::class),
                ],
                'translationOfWork' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'translator' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'typicalAgeRange' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'version' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'video' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\VideoObject::class
                    ),
                ],
                'workExample' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'workTranslation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Event::class,
            [
                'about' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'actor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'attendee' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'audience' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Audience::class),
                ],
                'composer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'contributor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'director' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'doorTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'duration' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Duration::class),
                ],
                'endDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'eventStatus' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\EventStatusType::class
                    ),
                ],
                'funder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'inLanguage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Language::class),
                ],
                'isAccessibleForFree' => [
                    true,
                ],
                'location' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'maximumAttendeeCapacity' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'offers' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'organizer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'performer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'previousStartDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'recordedIn' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'remainingAttendeeCapacity' => [
                    random_int(0, 100),
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                'sponsor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'startDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'subEvent' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'superEvent' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'translator' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'typicalAgeRange' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'workFeatured' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'workPerformed' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\GeoCoordinates::class,
            [
                'address' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'addressCountry' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Place\AdministrativeArea\Country::class
                    ),
                ],
                'elevation' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'latitude' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'longitude' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'postalCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\GeoShape::class,
            [
                'address' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'addressCountry' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Place\AdministrativeArea\Country::class
                    ),
                ],
                'box' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'circle' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'elevation' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'line' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'polygon' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'postalCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Offer::class,
            array_merge(
                static::FuzzingForDemandOfferCommon(),
                [
                'addOn' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'category' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory::class
                    ),
                ],
                'offeredBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'price' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'priceCurrency' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'priceValidUntil' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                ]
            ),
        ];

        yield [
            SchemaOrg\Organization::class,
            [
                'actionableFeedbackPolicy' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'address' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'alumni' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'areaServed' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'award' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'brand' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Brand::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'contactPoint' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint::class
                    ),
                ],
                'correctionsPolicy' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'department' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'dissolutionDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'diversityPolicy' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'diversityStaffingReport' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Article::class),
                ],
                'duns' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'email' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'employee' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'ethicsPolicy' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'event' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'faxNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'founder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'foundingDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'foundingLocation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'funder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'globalLocationNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'hasOfferCatalog' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\ItemList\OfferCatalog::class
                    ),
                ],
                'hasPOS' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'isicV4' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'knowsAbout' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'knowsLanguage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Language::class),
                ],
                'legalName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'leiCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'location' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'logo' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'makesOffer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'member' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'memberOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ProgramMembership::class),
                ],
                'naics' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'numberOfEmployees' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'ownershipFundingInfo' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\WebPage\AboutPage::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'owns' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OwnershipInfo::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'parentOrganization' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'publishingPrinciples' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                'seeks' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Demand::class),
                ],
                'sponsor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'subOrganization' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'taxID' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'telephone' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'unnamedSourcesPolicy' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'vatID' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ]
        ];

        yield [
            SchemaOrg\Person::class,
            [
                'additionalName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'address' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'affiliation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'alumniOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'award' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'birthDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'birthPlace' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'brand' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Brand::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'children' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'colleague' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'contactPoint' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint::class
                    ),
                ],
                'deathDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'deathPlace' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'duns' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'email' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'familyName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'faxNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'follows' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'funder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'gender' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\GenderType::class
                    ),
                ],
                'givenName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'globalLocationNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'hasOccupation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Occupation::class),
                ],
                'hasOfferCatalog' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\ItemList\OfferCatalog::class
                    ),
                ],
                'hasPOS' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'height' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Distance::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'homeLocation' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint::class
                    ),
                        static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'honorificPrefix' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'honorificSuffix' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'isicV4' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'jobTitle' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'knows' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'knowsAbout' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'knowsLanguage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Language::class),
                ],
                'makesOffer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'memberOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ProgramMembership::class),
                ],
                'naics' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'nationality' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Place\AdministrativeArea\Country::class
                    ),
                ],
                'netWorth' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class
                    ),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PriceSpecification::class
                    ),
                ],
                'owns' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OwnershipInfo::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'parent' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'performerIn' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'publishingPrinciples' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'relatedTo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'seeks' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Demand::class),
                ],
                'sibling' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'sponsor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'spouse' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'taxID' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'telephone' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'weight' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'workLocation' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'worksFor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'vatID' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Place::class,
            [
                'additionalProperty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
                'address' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'amenityFeature' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification::class
                    ),
                ],
                'branchCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'containedInPlace' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'containsPlace' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'event' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'faxNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'hasMap' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Map::class),
                ],
                'geo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\GeoCoordinates::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                ],
                'geospatiallyContains' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyCoveredBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyCovers' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyCrosses' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyDisjoint' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyEquals' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyIntersects' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyOverlaps' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyTouches' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'geospatiallyWithin' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\GeospatialGeometry::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'globalLocationNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'isAccessibleForFree' => [
                    false,
                ],
                'isicV4' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'logo' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'maximumAttendeeCapacity' => [
                    random_int(0, 100),
                ],
                'openingHoursSpecification' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification::class
                    ),
                ],
                'photo' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Photograph::class),
                ],
                'publicAccess' => [
                    true,
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                'smokingAllowed' => [
                    true,
                ],
                'specialOpeningHoursSpecification' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification::class
                    ),
                ],
                'telephone' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Product::class,
            [
                'additionalProperty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'audience' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Audience::class),
                ],
                'award' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'brand' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Brand::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'category' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory::class
                    ),
                ],
                'color' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'depth' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Distance::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'gtin12' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'gtin13' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'gtin14' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'gtin8' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'height' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Distance::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'isAccessoryOrSparePartFor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'isConsumableFor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'isRelatedTo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
                'isSimilarTo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
                'itemCondition' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\OfferItemCondition::class
                    ),
                ],
                'logo' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'manufacturer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'material' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'model' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product\ProductModel::class),
                ],
                'mpn' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'offers' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'productID' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'productionDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'purchaseDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'releaseDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                'sku' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'weight' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'width' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Distance::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Article::class,
            [
                'articleBody' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'articleSection' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'backstory' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Article::class),
                ],
                'pageEnd' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'pageStart' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'pagination' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'speakable' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\SpeakableSpecification::class
                    ),
                ],
                'wordCount' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Comment::class,
            [
                'downvoteCount' => [
                    random_int(0, 100),
                ],
                'parentItem' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Question::class),
                ],
                'upvoteCount' => [
                    random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\DataCatalog::class,
            [
                'dataset' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Dataset::class),
                ],
                'measurementTechnique' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Dataset::class,
            [
                'distribution' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\DataDownload::class
                    ),
                ],
                'includedInDataCatalog' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\DataCatalog::class),
                ],
                'issn' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'measurementTechnique' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'variableMeasured' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Map::class,
            [
                'mapType' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\MapCategoryType::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject::class,
            [
                'associatedArticle' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\Article\NewsArticle::class
                    ),
                ],
                'bitrate' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'contentSize' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'contentUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'duration' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Quantity\Duration::class
                    ),
                ],
                'embedUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'encodesCreativeWork' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork::class
                    ),
                ],
                'height' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Distance::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'playerType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'productionCompany' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'regionsAllowed' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'requiresSubscription' => [
                    true,
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\MediaSubscription::class),
                ],
                'uploadDate' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'width' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Distance::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicComposition::class,
            [
                'composer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'firstPerformance' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'includedComposition' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicComposition::class),
                ],
                'iswcCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'lyricist' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'lyrics' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'musicArrangement' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicComposition::class),
                ],
                'musicCompositionForm' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'musicalKey' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'recordedAs' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicRecording::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicPlaylist::class,
            [
                'numTracks' => [
                    random_int(0, 100),
                ],
                'track' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ItemList::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicRecording::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicRecording::class,
            [
                'byArtist' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Organization\PerformingGroup\MusicGroup::class
                    ),
                ],
                'duration' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Duration::class),
                ],
                'inAlbum' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MusicPlaylist\MusicAlbum::class
                    ),
                ],
                'inPlaylist' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicPlaylist::class),
                ],
                'isrcCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'recordingOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicComposition::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Question::class,
            [
                'acceptedAnswer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Comment\Answer::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ItemList::class),
                ],
                'answerCount' => [
                    random_int(0, 100),
                ],
                'downvoteCount' => [
                    random_int(0, 100),
                ],
                'suggestedAnswer' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Comment\Answer::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ItemList::class),
                ],
                'upvoteCount' => [
                    random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Review::class,
            [
                'itemReviewed' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'reviewAspect' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'reviewBody' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'reviewRating' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Rating::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\SoftwareApplication::class,
            [
                'applicationCategory' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'applicationSubCategory' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'applicationSuite' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'availableOnDevice' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'countriesNotSupported' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'countriesSupported' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'downloadUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'featureList' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'fileSize' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'installUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'memoryRequirements' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'operatingSystem' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'permissions' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'processorRequirements' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'releaseNotes' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'screenshot' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'softwareAddOn' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\SoftwareApplication::class
                    ),
                ],
                'softwareHelp' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'softwareRequirements' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'softwareVersion' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'storageRequirements' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'supportingData' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Dataset\DataFeed::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\WebPage::class,
            [
                'breadcrumb' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\ItemList\BreadcrumbList::class
                    ),
                ],
                'lastReviewed' => [
                    static::FuzzFreshSchemaOrgDate(),
                ],
                'mainContentOfPage' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\WebPageElement::class),
                ],
                'primaryImageOfPage' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'relatedLink' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'reviewedBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'significantLink' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'speakable' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\SpeakableSpecification::class
                    ),
                ],
                'specialty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\Specialty::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\WebSite::class,
            [
                'issn' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Article\NewsArticle::class,
            [
                'dateline' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'printColumn' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'printEdition' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'printPage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'printSection' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\Dataset\DataFeed::class,
            [
                'dataFeedElement' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\DataFeedItem::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject\AudioObject::class,
            [
                'transcript' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject\DataDownload::class,
            [
                'measurementTechnique' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject\ImageObject::class,
            [
                'caption' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'exifData' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
                'representativeOfPage' => [
                    false,
                ],
                'thumbnail' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MediaObject\VideoObject::class,
            [
                'actor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'caption' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'director' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'musicBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Organization\PerformingGroup\MusicGroup::class
                    ),
                ],
                'thumbnail' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'transcript' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'videoFrameSize' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'videoQuality' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicPlaylist\MusicAlbum::class,
            [
                'albumProductionType' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\MusicAlbumProductionType::class
                    ),
                ],
                'albumRelease' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MusicPlaylist\MusicRelease::class
                    ),
                ],
                'albumReleaseType' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\MusicAlbumReleaseType::class
                    ),
                ],
                'byArtist' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Organization\PerformingGroup\MusicGroup::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork\MusicPlaylist\MusicRelease::class,
            [
                'catalogNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'creditedTo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'duration' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Duration::class),
                ],
                'musicReleaseFormat' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\MusicReleaseFormatType::class
                    ),
                ],
                'recordLabel' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'releaseOf' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MusicPlaylist\MusicAlbum::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\Event\PublicationEvent::class,
            [
                'isAccessibleForFree' => [
                    false,
                ],
                'publishedBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'publishedOn' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Service\BroadcastService::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\AlignmentObject::class,
            [
                'alignmentType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'educationalFramework' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'targetDescription' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'targetName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'targetUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\BroadcastChannel::class,
            [
                'broadcastChannelId' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'broadcastFrequency' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\BroadcastFrequencySpecification::class
                    ),
                ],
                'broadcastServiceTier' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'genre' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'inBroadcastLineup' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Service\CableOrSatelliteService::class
                    ),
                ],
                'providesBroadcastService' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Service\BroadcastService::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\BroadcastFrequencySpecification::class,
            [
                'broadcastFrequencyValue' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\DataFeedItem::class,
            [
                'dateCreated' => [
                    static::FuzzFreshSchemaOrgDate(),
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'dateDeleted' => [
                    static::FuzzFreshSchemaOrgDate(),
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'dateModified' => [
                    static::FuzzFreshSchemaOrgDate(),
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'item' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Demand::class,
            static::FuzzingForDemandOfferCommon(),
        ];

        yield [
            SchemaOrg\Intangible\EntryPoint::class,
            [
                'actionApplication' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\SoftwareApplication::class
                    ),
                ],
                'actionPlatform' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'contentType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'encodingType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'httpMethod' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'urlTemplate' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\EntryPoint::class,
            [
                'domainIncludes' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible::class),
                ],
                'inverseOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\IntangibleProperty::class),
                ],
                'rangeIncludes' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible::class),
                ],
                'supersededBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\IntangibleClass::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Enumeration::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\IntangibleProperty::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\IntangibleProperty::class,
            [
                'domainIncludes' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible::class),
                ],
                'inverseOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\IntangibleProperty::class),
                ],
                'rangeIncludes' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible::class),
                ],
                'supersededBy' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\IntangibleClass::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Enumeration::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\IntangibleProperty::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\ItemList::class,
            [
                'itemListElement' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ListItem::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'itemListOrder' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\ItemListOrderType::class
                    ),
                ],
                'numberOfItems' => [
                    random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\ListItem::class,
            [
                'item' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'nextItem' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ListItem::class),
                ],
                'position' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'previousItem' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ListItem::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\MediaSubscription::class,
            [
                'authenticator' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'expectsAcceptanceOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Occupation::class,
            [
                'educationRequirements' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'estimatedSalary' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class
                    ),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue\MonetaryAmountDistribution::class
                    ),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PriceSpecification::class
                    ),
                ],
                'experienceRequirements' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'occupationLocation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                ],
                'occupationalCategory' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'qualifications' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'responsibilities' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'skills' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\ProgramMembership::class,
            [
                'hostingOrganization' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'member' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'membershipNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'programName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Rating::class,
            [
                'author' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'bestRating' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'ratingValue' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'reviewAspect' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'worstRating' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Service::class,
            [
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'areaServed' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'audience' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Audience::class),
                ],
                'availableChannel' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ServiceChannel::class),
                ],
                'award' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'brand' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Brand::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'broker' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'category' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory::class
                    ),
                ],
                'hasOfferCatalog' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\ItemList\OfferCatalog::class
                    ),
                ],
                'hoursAvailable' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification::class
                    ),
                ],
                'isRelatedTo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
                'isSimilarTo' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
                'logo' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\ImageObject::class
                    ),
                ],
                'offers' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'provider' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'providerMobility' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'review' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Review::class),
                ],
                'serviceOutput' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'serviceType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'termsOfService' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\ServiceChannel::class,
            [
                'availableLanguage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Language::class),
                ],
                'processingTime' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Duration::class),
                ],
                'providesService' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
                'serviceLocation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'servicePhone' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint::class
                    ),
                ],
                'servicePostalAddress' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'serviceSmsNumber' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint::class
                    ),
                ],
                'serviceUrl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\SpeakableSpecification::class,
            [
                'cssSelector' => [
                    static::FuzzFreshSchemaOrgCssSelectorType(),
                ],
                'xpath' => [
                    static::FuzzFreshSchemaOrgXPathType(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Trip::class,
            [
                'arrivalTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'departureTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'hasPart' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Trip::class),
                ],
                'isPartOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Trip::class),
                ],
                'itinerary' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ItemList::class),
                ],
                'offers' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Offer::class),
                ],
                'provider' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Enumeration\QualitativeValue::class,
            [
                'additionalProperty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
                'equal' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                ],
                'greater' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                ],
                'greaterOrEqual' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                ],
                'lesser' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                ],
                'lesserOrEqual' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                ],
                'nonEqual' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                ],
                'valueReference' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Enumeration::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\StructuredValue::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Rating\AggregateRating::class,
            [
                'itemReviewed' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'ratingCount' => [
                    random_int(0, 100),
                ],
                'reviewCount' => [
                    random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Service\BroadcastService::class,
            [
                'broadcastAffiliateOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'broadcastDisplayName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'broadcastFrequency' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\BroadcastFrequencySpecification::class
                    ),
                ],
                'broadcastTimezone' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'broadcaster' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                ],
                'hasBroadcastChannel' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\BroadcastChannel::class),
                ],
                'parentService' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Service\BroadcastService::class
                    ),
                ],
                'videoFormat' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Service\FinancialProduct::class,
            [
                'annualPercentageRate' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'feesAndCommissionsSpecification' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'interestRate' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\Service\FinancialProduct\LoanOrCredit::class,
            [
                'amount' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class
                    ),
                ],
                'gracePeriod' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Quantity\Duration::class),
                ],
                'loanRepaymentForm' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\RepaymentSpecification::class
                    ),
                ],
                'loanTerm' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'loanType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'recourseLoan' => [
                    true,
                ],
                'renegotiableLoan' => [
                    false,
                ],
                'requiredCollateral' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\ContactPoint::class,
            [
                'areaServed' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'availableLanguage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Language::class),
                ],
                'contactOption' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\ContactPointOption::class
                    ),
                ],
                'contactType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'email' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'faxNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'hoursAvailable' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification::class
                    ),
                ],
                'productSupported' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                ],
                'telephone' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\InteractionCounter::class,
            [
                'interactionService' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\SoftwareApplication::class
                    ),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\WebSite::class),
                ],
                'interactionType' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Action::class),
                ],
                'userInteractionCount' => [
                    random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class,
            [
                'maxValue' => [
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'minValue' => [
                    (float) random_int(0, 100),
                    random_int(0, 100),
                ],
                'value' => [
                    true,
                    static::FuzzFreshStringforSchemaOrg(),
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\StructuredValue::class),
                ],
                'currency' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'validFrom' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'validThrough' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification::class,
            [
                'closes' => [
                    static::FuzzFreshSchemaOrgTime(),
                ],
                'dayOfWeek' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\DayOfWeek::class
                    ),
                ],
                'opens' => [
                    static::FuzzFreshSchemaOrgTime(),
                ],
                'validFrom' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'validThrough' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\OwnershipInfo::class,
            [
                'acquiredFrom' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'ownedFrom' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'ownedThrough' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'typeOfGood' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\PriceSpecification::class,
            [
                'eligibleQuantity' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'eligibleTransactionVolume' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PriceSpecification::class
                    ),
                ],
                'maxPrice' => [
                    random_int(0, 100),
                ],
                'minPrice' => [
                    random_int(0, 100),
                ],
                'price' => [
                    random_int(0, 100),
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'priceCurrency' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'valueAddedTaxIncluded' => [
                    true,
                ],
                'validFrom' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'validThrough' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\PropertyValue::class,
            array_merge(
            [
                'maxValue' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
                'measurementTechnique' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'minValue' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
                'propertyID' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
                static::FuzzingForUnitCodeTextValueReference()
            ),
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class,
            array_merge(
            [
                'additionalProperty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                    ),
                ],
                'maxValue' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
                'minValue' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
            ],
                static::FuzzingForUnitCodeTextValueReference()
            ),
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\RepaymentSpecification::class,
            [
                'downPayment' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class
                    ),
                ],
                'earlyPrepaymentPenalty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class
                    ),
                ],
                'loanPaymentAmount' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\MonetaryAmount::class
                    ),
                ],
                'loanPaymentFrequency' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
                'numberOfLoanPayments' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\TypeAndQuantityNode::class,
            [
                'amountOfThisGood' => [
                    random_int(0, 100),
                    (float) random_int(0, 100),
                ],
                'businessFunction' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\BusinessFunction::class
                    ),
                ],
                'typeOfGood' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
                ],
                'unitCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'unitText' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\WarrantyPromise::class,
            [
                'durationOfWarranty' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                    ),
                ],
                'warrantyScope' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Enumeration\WarrantyScope::class
                    ),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class,
            [
                'addressCountry' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Place\AdministrativeArea\Country::class
                    ),
                ],
                'addressLocality' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'addressRegion' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'postOfficeBoxNumber' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'postalCode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'streetAddress' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification::class,
            [
                'hoursAvailable' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification::class
                    ),
                ],
                'validFrom' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'validThrough' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Intangible\StructuredValue\QuantitativeValue\MonetaryAmountDistribution::class,
            [
                'currency' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Organization\PerformingGroup\MusicGroup::class,
            [
                'album' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MusicPlaylist\MusicAlbum::class
                    ),
                ],
                'genre' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'track' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\ItemList::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MusicRecording::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Product\ProductModel::class,
            [
                'isVariantOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product\ProductModel::class),
                ],
                'predecessorOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product\ProductModel::class),
                ],
                'successorOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Product\ProductModel::class),
                ],
            ],
        ];
    }

    protected static function FuzzFreshSchemaOrgDate(
        string $date = 'January 1st 1970'
    ) : SchemaOrg\DataTypes\Date {
        return new SchemaOrg\DataTypes\Date($date);
    }

    protected static function FuzzFreshSchemaOrgDateTime(
        string $datetime = 'January 1st 1970 01:02:03'
    ) : SchemaOrg\DataTypes\DateTime {
        return new SchemaOrg\DataTypes\DateTime($datetime);
    }

    protected static function FuzzFreshSchemaOrgTime(
        string $time = '01:02:03'
    ) : SchemaOrg\DataTypes\Time {
        return new SchemaOrg\DataTypes\Time($time);
    }

    protected static function FuzzFreshSchemaOrgCssSelectorType(
    ) : SchemaOrg\DataTypes\DataType\Text\CssSelectorType {
        /**
        * @var SchemaOrg\DataTypes\DataType\Text\CssSelectorType
        */
        $out = SchemaOrg\DataTypes\DataType\Text\CssSelectorType::DataTypeFromString('.foo');

        return $out;
    }

    protected static function FuzzFreshSchemaOrgXPathType(
    ) : SchemaOrg\DataTypes\DataType\Text\XPathType {
        /**
        * @var SchemaOrg\DataTypes\DataType\Text\XPathType
        */
        $out = SchemaOrg\DataTypes\DataType\Text\XPathType::DataTypeFromString('//foo');

        return $out;
    }

    protected static function FuzzFreshStringforSchemaOrg(int $bytes = 4) : string
    {
        return bin2hex(random_bytes($bytes));
    }

    /**
    * @template T as SchemaOrg\Thing
    *
    * @psalm-param class-string<T> $type
    *
    * @psalm-return T
    */
    protected static function FuzzFreshSchemaOrgType(
        string $type,
        array $with_args = []
    ) : SchemaOrg\Thing {
        $with_args['identifier'] = [static::FuzzFreshStringforSchemaOrg()];

        if ((new ReflectionClass($type))->isAbstract()) {
            $lookup =
                '\\SignpostMarv\\DaftObject\\SchemaOrgLookup\\Lookup_' .
                hash('sha512', $type);

            if (is_a($lookup, LookupInterface::class, true)) {
                foreach ($lookup::ObtainClasses() as $maybe) {
                    if ( ! (new ReflectionClass($maybe))->isAbstract()) {
                        return new $maybe($with_args);
                    }
                }

                throw new InvalidArgumentException(sprintf(
                    '%s did not resolve to a non-abstract implementation!',
                    $type
                ));
            } else {
                throw new InvalidArgumentException(sprintf(
                    'Cannot lookup implementations of %s',
                    $type
                ));
            }
        }

        return new $type($with_args);
    }

    /**
    * @return array<string, array<int, string|SchemaOrg\Thing|SchemaOrg\DataTypes\DataType>>
    */
    protected static function FuzzingForDemandOfferCommon() : array
    {
        return [
            'acceptedPaymentMethod' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Service\FinancialProduct\LoanOrCredit::class
                ),
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\PaymentMethod::class
                ),
            ],
            'advanceBookingRequirement' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                ),
            ],
            'areaServed' => [
                static::FuzzFreshStringforSchemaOrg(),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
            ],
            'availability' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\ItemAvailability::class
                ),
            ],
            'availabilityEnds' => [
                static::FuzzFreshSchemaOrgDateTime(),
            ],
            'availabilityStarts' => [
                static::FuzzFreshSchemaOrgDateTime(),
            ],
            'availableAtOrFrom' => [
                static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
            ],
            'availableDeliveryMethod' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\DeliveryMethod::class
                ),
            ],
            'businessFunction' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\BusinessFunction::class
                ),
            ],
            'deliveryLeadTime' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                ),
            ],
            'eligibleCustomerType' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\BusinessEntityType::class
                ),
            ],
            'eligibleDuration' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                ),
            ],
            'eligibleQuantity' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                ),
            ],
            'eligibleRegion' => [
                static::FuzzFreshStringforSchemaOrg(),
                static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
            ],
            'eligibleTransactionVolume' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\PriceSpecification::class
                ),
            ],
            'gtin12' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'gtin13' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'gtin14' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'gtin8' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'includesObject' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\TypeAndQuantityNode::class
                ),
            ],
            'ineligibleRegion' => [
                static::FuzzFreshStringforSchemaOrg(),
                static::FuzzFreshSchemaOrgType(SchemaOrg\GeoShape::class),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
            ],
            'inventoryLevel' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                ),
            ],
            'itemCondition' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\OfferItemCondition::class
                ),
            ],
            'itemOffered' => [
                static::FuzzFreshSchemaOrgType(SchemaOrg\Product::class),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Service::class),
            ],
            'mpn' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'priceSpecification' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\PriceSpecification::class
                ),
            ],
            'seller' => [
                static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
            ],
            'serialNumber' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'sku' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'validFrom' => [
                static::FuzzFreshSchemaOrgDateTime(),
            ],
            'validThrough' => [
                static::FuzzFreshSchemaOrgDateTime(),
            ],
            'warranty' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\WarrantyPromise::class
                ),
            ],
        ];
    }

    /**
    * @return array<string, array<int, string|int|float|bool|SchemaOrg\Thing|SchemaOrg\DataTypes\DataType>>
    */
    protected static function FuzzingForUnitCodeTextValueReference() : array
    {
        return [
            'unitCode' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'unitText' => [
                static::FuzzFreshStringforSchemaOrg(),
            ],
            'value' => [
                true,
                static::FuzzFreshStringforSchemaOrg(),
                random_int(0, 100),
                (float) random_int(0, 100),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\StructuredValue::class),
            ],
            'valueReference' => [
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\Enumeration\QualitativeValue::class
                ),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Enumeration::class),
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\PropertyValue::class
                ),
                static::FuzzFreshSchemaOrgType(
                    SchemaOrg\Intangible\StructuredValue\QuantitativeValue::class
                ),
                static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\StructuredValue::class),
            ],
        ];
    }
}
