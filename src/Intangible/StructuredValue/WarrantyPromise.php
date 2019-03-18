<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\WarrantyScope;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, QuantitativeValue> $durationOfWarranty
* @property array<int, WarrantyScope> $warrantyScope
*/
class WarrantyPromise extends Base
{
    const SCHEMA_ORG_TYPE = 'WarrantyPromise';

    const PROPERTIES = [
        'durationOfWarranty',
        'warrantyScope',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'durationOfWarranty' => [
            QuantitativeValue::class,
        ],
        'warrantyScope' => [
            WarrantyScope::class,
        ],
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
        $this->NudgePropertyValue(
            'durationOfWarranty',
            $value
        );
    }

    /**
    * @return array<int, WarrantyScope>
    */
    public function GetWarrantyScope() : array
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
    public function SetWarrantyScope(array $value) : void
    {
        $this->NudgePropertyValue(
            'warrantyScope',
            $value
        );
    }
}
