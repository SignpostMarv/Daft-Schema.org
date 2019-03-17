<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

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
        $this->NudgePropertyValue(
            'advanceBookingRequirement',
            $value
        );
    }
}
