<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\OfferItemCondition;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\WarrantyPromise;

/**
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, Place> $availableAtOrFrom
* @property array<int, DeliveryMethod> $availableDeliveryMethod
* @property array<int, string|Thing|PhysicalActivityCategory> $category
* @property array<int, QuantitativeValue> $inventoryLevel
* @property array<int, OfferItemCondition> $itemCondition
* @property array<int, Product|Service> $itemOffered
* @property array<int, string> $mpn
* @property array<int, PriceSpecification> $priceSpecification
* @property array<int, Review> $review
* @property array<int, Organization|Person> $seller
* @property array<int, string> $serialNumber
* @property array<int, WarrantyPromise> $warranty
*/
class Offer extends Thing
{
    use DaftObjectTraits\IsOfferOrDemand;
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasCategory;
    use DaftObjectTraits\HasItemCondition;
    use DaftObjectTraits\HasMpn;
    use DaftObjectTraits\HasReview;

    const SCHEMA_ORG_TYPE = 'Offer';

    const PROPERTIES = [
        'acceptedPaymentMethod',
        'addOn',
        'advanceBookingRequirement',
        'aggregateRating',
        'areaServed',
        'availability',
        'availabilityEnds',
        'availabilityStarts',
        'availableAtOrFrom',
        'availableDeliveryMethod',
        'businessFunction',
        'category',
        'deliveryLeadTime',
        'eligibleCustomerType',
        'eligibleDuration',
        'eligibleQuantity',
        'eligibleRegion',
        'eligibleTransactionVolume',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'includesObject',
        'ineligibleRegion',
        'inventoryLevel',
        'itemCondition',
        'itemOffered',
        'mpn',
        'offeredBy',
        'price',
        'priceCurrency',
        'priceSpecification',
        'priceValidUntil',
        'review',
        'seller',
        'serialNumber',
        'sku',
        'validFrom',
        'validThrough',
        'warranty',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'availableAtOrFrom' => [
            Place::class,
        ],
        'availableDeliveryMethod' => [
            DeliveryMethod::class,
        ],
        'category' => [
            'string',
            Thing::class,
            PhysicalActivityCategory::class,
        ],
        'inventoryLevel' => [
            QuantitativeValue::class,
        ],
        'itemCondition' => [
            OfferItemCondition::class,
        ],
        'itemOffered' => [
            Product::class,
            Service::class,
        ],
        'mpn' => [
            'string',
        ],
        'priceSpecification' => [
            PriceSpecification::class,
        ],
        'review' => [
            Review::class,
        ],
        'seller' => [
            Organization::class,
            Person::class,
        ],
        'serialNumber' => [
            'string',
        ],
        'warranty' => [
            WarrantyPromise::class,
        ],
    ];

    /**
    * @return array<int, Offer>
    */
    public function GetAddOn() : array
    {
        /**
        * @var array<int, Offer>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'addOn',
            $this->RetrievePropertyValueFromData('addOn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Offer> $value
    */
    public function SetAddOn(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'addOn',
            __METHOD__,
            $value,
            Offer::class
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetOfferedBy() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'offeredBy',
            $this->RetrievePropertyValueFromData('offeredBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetOfferedBy(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons(
            'offeredBy',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string|float|int>
    */
    public function GetPrice() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'price',
            $this->RetrievePropertyValueFromData('price'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetPrice(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'price',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPriceCurrency() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'priceCurrency',
            $this->RetrievePropertyValueFromData('priceCurrency'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPriceCurrency(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'priceCurrency',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetPriceValidUntil() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'priceValidUntil',
            $this->RetrievePropertyValueFromData('priceValidUntil'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetPriceValidUntil(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'priceValidUntil',
            __METHOD__,
            $value,
            Date::class
        );
    }
}
