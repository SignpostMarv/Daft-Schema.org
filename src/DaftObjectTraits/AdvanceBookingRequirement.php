<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\TypeUtilities;

trait AdvanceBookingRequirement
{
    use DaftObjectTrait;

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetAdvanceBookingRequirement() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'advanceBookingRequirement',
            $this->RetrievePropertyValueFromData('advanceBookingRequirement'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetAdvanceBookingRequirement(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'advanceBookingRequirement',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }
}
