<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\WarrantyScope;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\TypeUtilities;

class WarrantyPromise extends Base
{
    const SCHEMA_ORG_TYPE = 'WarrantyPromise';

    const PROPERTIES = [
        'durationOfWarranty',
        'warrantyScope',
    ];

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetDurationOfWarranty() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'durationOfWarranty',
            $this->RetrievePropertyValueFromData('durationOfWarranty'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetDurationOfWarranty(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'durationOfWarranty',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, WarrantyScope>
    */
    public function GetOwnedFrom() : array
    {
        /**
        * @var array<int, WarrantyScope>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'warrantyScope',
            $this->RetrievePropertyValueFromData('warrantyScope'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, WarrantyScope> $value
    */
    public function SetOwnedFrom(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'warrantyScope',
            __METHOD__,
            $value,
            WarrantyScope::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetOwnedThrough() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ownedThrough',
            $this->RetrievePropertyValueFromData('ownedThrough'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetOwnedThrough(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'ownedThrough',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, Product|Service>
    */
    public function GetWarrantyScope() : array
    {
        /**
        * @var array<int, Product|Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'typeOfGood',
            $this->RetrievePropertyValueFromData('typeOfGood'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product|Service> $value
    */
    public function SetWarrantyScope(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'typeOfGood',
            __METHOD__,
            $value,
            Product::class,
            Service::class
        );
    }
}
