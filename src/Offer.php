<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessEntityType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessFunction;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ItemAvailability;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\OfferItemCondition;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PaymentMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service\FinancialProduct\LoanOrCredit;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\TypeAndQuantityNode;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\WarrantyPromise;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;

/**
* @property array<int, LoanOrCredit|PaymentMethod> $acceptedPaymentMethod
* @property array<int, Offer> $addOn
* @property array<int, QuantitativeValue> $advanceBookingRequirement
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, string|AdministrativeArea|GeoShape|Place> $areaServed
* @property array<int, ItemAvailability> $availability
* @property array<int, DateTime> $availabilityEnds
* @property array<int, DateTime> $availabilityStarts
* @property array<int, Place> $availableAtOrFrom
* @property array<int, DeliveryMethod> $availableDeliveryMethod
* @property array<int, Type> $businessFunction
* @property array<int, string|Thing|PhysicalActivityCategory> $category
* @property array<int, QuantitativeValue> $deliveryLeadTime
* @property array<int, BusinessEntityType> $eligibleCustomerType
* @property array<int, QuantitativeValue> $eligibleDuration
* @property array<int, QuantitativeValue> $eligibleQuantity
* @property array<int, string|GeoShape|Place> $eligibleRegion
* @property array<int, PriceSpecification> $eligibleTransactionVolume
* @property array<int, string> $gtin12
* @property array<int, string> $gtin13
* @property array<int, string> $gtin14
* @property array<int, string> $gtin8
* @property array<int, TypeAndQuantityNode> $includesObject
* @property array<int, string|GeoShape|Place> $ineligibleRegion
* @property array<int, QuantitativeValue> $inventoryLevel
* @property array<int, OfferItemCondition> $itemCondition
* @property array<int, Product|Service> $itemOffered
* @property array<int, string> $mpn
* @property array<int, Organization|Person> $offeredBy
* @property array<int, string|float|int> $price
* @property array<int, string> $priceCurrency
* @property array<int, PriceSpecification> $priceSpecification
* @property array<int, Date> $priceValidUntil
* @property array<int, Review> $review
* @property array<int, Organization|Person> $seller
* @property array<int, string> $serialNumber
* @property array<int, string> $sku
* @property array<int, DateTime> $validFrom
* @property array<int, DateTime> $validThrough
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
        'acceptedPaymentMethod' => [
            LoanOrCredit::class,
            PaymentMethod::class,
        ],
        'addOn' => [
            Offer::class,
        ],
        'advanceBookingRequirement' => [
            QuantitativeValue::class,
        ],
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'areaServed' => [
            'string',
            AdministrativeArea::class,
            GeoShape::class,
            Place::class,
        ],
        'availability' => [
            ItemAvailability::class,
        ],
        'availabilityEnds' => [
            DateTime::class,
        ],
        'availabilityStarts' => [
            DateTime::class,
        ],
        'availableAtOrFrom' => [
            Place::class,
        ],
        'availableDeliveryMethod' => [
            DeliveryMethod::class,
        ],
        'businessFunction' => [
            BusinessFunction::class,
        ],
        'category' => [
            'string',
            Thing::class,
            PhysicalActivityCategory::class,
        ],
        'deliveryLeadTime' => [
            QuantitativeValue::class,
        ],
        'eligibleCustomerType' => [
            BusinessEntityType::class,
        ],
        'eligibleDuration' => [
            QuantitativeValue::class,
        ],
        'eligibleQuantity' => [
            QuantitativeValue::class,
        ],
        'eligibleRegion' => [
            'string',
            GeoShape::class,
            Place::class,
        ],
        'eligibleTransactionVolume' => [
            PriceSpecification::class,
        ],
        'gtin12' => [
            'string',
        ],
        'gtin13' => [
            'string',
        ],
        'gtin14' => [
            'string',
        ],
        'gtin8' => [
            'string',
        ],
        'includesObject' => [
            TypeAndQuantityNode::class,
        ],
        'ineligibleRegion' => [
            'string',
            GeoShape::class,
            Place::class,
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
        'offeredBy' => [
            Organization::class,
            Person::class,
        ],
        'price' => [
            'string',
            'double',
            'integer',
        ],
        'priceCurrency' => [
            'string',
        ],
        'priceSpecification' => [
            PriceSpecification::class,
        ],
        'priceValidUntil' => [
            Date::class,
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
        'sku' => [
            'string',
        ],
        'validFrom' => [
            DateTime::class,
        ],
        'validThrough' => [
            DateTime::class,
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
        $this->NudgePropertyValue(
            'priceCurrency',
            $value,
            true
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
