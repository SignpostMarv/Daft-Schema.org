<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Audience;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\GeoShape;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList\OfferCatalog;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Offer;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, string|AdministrativeArea|GeoShape|Place> $areaServed
* @property array<int, Audience> $audience
* @property array<int, ServiceChannel> $availableChannel
* @property array<int, string> $award
* @property array<int, Brand|Organization> $brand
* @property array<int, Organization|Person> $broker
* @property array<int, string|PhysicalActivityCategory|Thing> $category
* @property array<int, OfferCatalog> $hasOfferCatalog
* @property array<int, OpeningHoursSpecification> $hoursAvailable
* @property array<int, Product|Service> $isRelatedTo
* @property array<int, Product|Service> $isSimilarTo
* @property array<int, ImageObject> $logo
* @property array<int, Offer> $offers
* @property array<int, Organization|Person> $provider
* @property array<int, string> $providerMobility
* @property array<int, Review> $review
* @property array<int, string> $serviceOutput
* @property array<int, string> $serviceType
* @property array<int, string> $termsOfService
*/
class Service extends Base
{
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasAreaServed;
    use DaftObjectTraits\HasAudience;
    use DaftObjectTraits\HasAward;
    use DaftObjectTraits\HasBrand;
    use DaftObjectTraits\HasCategory;
    use DaftObjectTraits\HasHasOfferCatalog;
    use DaftObjectTraits\HasHoursAvailable;
    use DaftObjectTraits\HasLogo;
    use DaftObjectTraits\HasOffers;
    use DaftObjectTraits\HasProvider;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\IsRelatedOrSimilarTo;

    const SCHEMA_ORG_TYPE = 'Service';

    const PROPERTIES = [
        'aggregateRating',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'broker',
        'category',
        'hasOfferCatalog',
        'hoursAvailable',
        'isRelatedTo',
        'isSimilarTo',
        'logo',
        'offers',
        'provider',
        'providerMobility',
        'review',
        'serviceOutput',
        'serviceType',
        'termsOfService',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'areaServed' => [
            'string',
            AdministrativeArea::class,
            GeoShape::class,
            Place::class,
        ],
        'audience' => [
            Audience::class,
        ],
        'availableChannel' => [
            ServiceChannel::class,
        ],
        'award' => [
            'string',
        ],
        'brand' => [
            Brand::class,
            Organization::class,
        ],
        'broker' => [
            Organization::class,
            Person::class,
        ],
        'category' => [
            'string',
            PhysicalActivityCategory::class,
            Thing::class,
        ],
        'hasOfferCatalog' => [
            OfferCatalog::class,
        ],
        'hoursAvailable' => [
            OpeningHoursSpecification::class,
        ],
        'isRelatedTo' => [
            Product::class,
            Service::class,
        ],
        'isSimilarTo' => [
            Product::class,
            Service::class,
        ],
        'logo' => [
            ImageObject::class,
        ],
        'offers' => [
            Offer::class,
        ],
        'provider' => [
            Organization::class,
            Person::class,
        ],
        'providerMobility' => [
            'string',
        ],
        'review' => [
            Review::class,
        ],
        'serviceOutput' => [
            'string',
        ],
        'serviceType' => [
            'string',
        ],
        'termsOfService' => [
            'string',
        ],
    ];

    /**
    * @return array<int, ServiceChannel>
    */
    public function GetAvailableChannel() : array
    {
        /**
        * @var array<int, ServiceChannel>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableChannel',
            $this->RetrievePropertyValueFromData('availableChannel'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ServiceChannel> $value
    */
    public function SetAvailableChannel(array $value) : void
    {
        $this->NudgePropertyValue(
            'availableChannel',
            $value
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetBroker() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broker',
            $this->RetrievePropertyValueFromData('broker'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetBroker(array $value) : void
    {
        $this->NudgePropertyValue(
            'broker',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetProviderMobility() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'providerMobility',
            $this->RetrievePropertyValueFromData('providerMobility'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetProviderMobility(array $value) : void
    {
        $this->NudgePropertyValue(
            'providerMobility',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetServiceOutput() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceOutput',
            $this->RetrievePropertyValueFromData('serviceOutput'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetServiceOutput(array $value) : void
    {
        $this->NudgePropertyValue(
            'serviceOutput',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetServiceType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceType',
            $this->RetrievePropertyValueFromData('serviceType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetServiceType(array $value) : void
    {
        $this->NudgePropertyValue(
            'serviceType',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetTermsOfService() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'termsOfService',
            $this->RetrievePropertyValueFromData('termsOfService'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTermsOfService(array $value) : void
    {
        $this->NudgePropertyValue(
            'termsOfService',
            $value,
            true
        );
    }
}
