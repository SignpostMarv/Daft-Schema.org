<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int|float|StructuredValue\QuantitativeValue> $broadcastFrequencyValue
*/
class BroadcastFrequencySpecification extends Base
{
    const SCHEMA_ORG_TYPE = 'BroadcastFrequencySpecification';

    const PROPERTIES = [
        'broadcastFrequencyValue',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'broadcastFrequencyValue' => [
            'integer',
            'double',
            StructuredValue\QuantitativeValue::class,
        ],
    ];

    /**
    * @return array<int, int|float|StructuredValue\QuantitativeValue>
    */
    public function GetBroadcastFrequencyValue() : array
    {
        /**
        * @var array<int, int|float|StructuredValue\QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastFrequencyValue',
            $this->RetrievePropertyValueFromData('broadcastFrequencyValue'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|StructuredValue\QuantitativeValue> $value
    */
    public function SetBroadcastFrequencyValue(array $value) : void
    {
        $this->NudgePropertyValue(
            'broadcastFrequencyValue',
            $value
        );
    }
}
