<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\GeoShape;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessEntityType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\PriceSpecification;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait EligibleCustomerTypeAndDurationAndQuantityAndRegionAndTransactionVolumeAndIneligibleRegion
{
    use DaftObjectTrait;

    /**
    * @return array<int, BusinessEntityType>
    */
    public function GetEligibleCustomerType() : array
    {
        /**
        * @var array<int, BusinessEntityType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleCustomerType',
            $this->RetrievePropertyValueFromData('eligibleCustomerType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, BusinessEntityType> $value
    */
    public function SetEligibleCustomerType(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eligibleCustomerType',
            __METHOD__,
            $value,
            BusinessEntityType::class
        );
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetEligibleDuration() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleDuration',
            $this->RetrievePropertyValueFromData('eligibleDuration'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetEligibleDuration(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eligibleDuration',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetEligibleQuantity() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleQuantity',
            $this->RetrievePropertyValueFromData('eligibleQuantity'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetEligibleQuantity(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eligibleQuantity',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, string|GeoShape|Place>
    */
    public function GetEligibleRegion() : array
    {
        /**
        * @var array<int, string|GeoShape|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleRegion',
            $this->RetrievePropertyValueFromData('eligibleRegion'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|GeoShape|Place> $value
    */
    public function SetEligibleRegion(array $value) : void
    {
        $this->NudgePropertyValue(
            'eligibleRegion',
            $value,
            true
        );
    }

    /**
    * @return array<int, PriceSpecification>
    */
    public function GetEligibleTransactionVolume() : array
    {
        /**
        * @var array<int, PriceSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleTransactionVolume',
            $this->RetrievePropertyValueFromData('eligibleTransactionVolume'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PriceSpecification> $value
    */
    public function SetEligibleTransactionVolume(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eligibleTransactionVolume',
            __METHOD__,
            $value,
            PriceSpecification::class
        );
    }

    /**
    * @return array<int, string|GeoShape|Place>
    */
    public function GetIneligibleRegion() : array
    {
        /**
        * @var array<int, string|GeoShape|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ineligibleRegion',
            $this->RetrievePropertyValueFromData('ineligibleRegion'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|GeoShape|Place> $value
    */
    public function SetIneligibleRegion(array $value) : void
    {
        $this->NudgePropertyValue(
            'ineligibleRegion',
            $value,
            true
        );
    }
}
