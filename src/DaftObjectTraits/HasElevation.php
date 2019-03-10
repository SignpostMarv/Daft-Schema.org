<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasElevation
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|float|int>
    */
    public function GetElevation() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'elevation',
            $this->RetrievePropertyValueFromData('elevation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetElevation(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'elevation',
            __METHOD__,
            $value
        );
    }
}
