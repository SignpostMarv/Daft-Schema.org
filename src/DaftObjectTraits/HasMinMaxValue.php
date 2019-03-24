<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasMinMaxValue
{
    use DaftObjectTrait;

    /**
    * @return array<int, float|int>
    */
    public function GetMaxValue() : array
    {
        /**
        * @var array<int, float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'maxValue',
            $this->RetrievePropertyValueFromData('maxValue'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, float|int> $value
    */
    public function SetMaxValue(array $value) : void
    {
        $this->NudgePropertyValue('maxValue', $value);
    }

    /**
    * @return array<int, float|int>
    */
    public function GetMinValue() : array
    {
        /**
        * @var array<int, float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'minValue',
            $this->RetrievePropertyValueFromData('minValue'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, float|int> $value
    */
    public function SetMinValue(array $value) : void
    {
        $this->NudgePropertyValue('minValue', $value);
    }

    /**
    * @return array<int, bool|string|int|float|StructuredValue>
    */
    public function GetValue() : array
    {
        /**
        * @var array<int, bool|string|int|float|StructuredValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'value',
            $this->RetrievePropertyValueFromData('value'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool|string|int|float|StructuredValue> $value
    */
    public function SetValue(array $value) : void
    {
        $this->NudgePropertyValue('value', $value, StructuredValue::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }
}
