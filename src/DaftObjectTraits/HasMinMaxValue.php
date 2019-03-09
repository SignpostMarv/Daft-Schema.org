<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use InvalidArgumentException;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueIntegersOrFloats('maxValue', __METHOD__, $value);
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
        $this->NudgePropertyWithUniqueIntegersOrFloats('minValue', __METHOD__, $value);
    }

    /**
    * @return array<int, bool|string|int|float|StructuredValue>
    */
    public function GetValue() : array
    {
        /**
        * @var array<int, string>
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
        $initialCount = count($value);

        /**
        * @var array<int, bool|string|int|float|StructuredValue>
        */
        $value = array_filter(
            $value,
            /**
            * @param mixed $maybe
            */
            function ($maybe) : bool {
                return
                    is_bool($maybe) ||
                    is_string($maybe) ||
                    is_float($maybe) ||
                    is_int($maybe) ||
                    ($maybe instanceof StructuredValue);
            }
        );

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Argument 1 passed to ' .
                __METHOD__ .
                ' must be an array of any combination of booleans, strings, floats, ints, and ' .
                StructuredValue::class .
                '!'
            );
        }

        $this->NudgePropertyValue('value', $value);
    }
}
