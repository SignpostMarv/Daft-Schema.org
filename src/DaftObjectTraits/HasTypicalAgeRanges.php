<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasTypicalAgeRanges
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetTypicalAgeRange() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'typicalAgeRange',
            $this->RetrievePropertyValueFromData('typicalAgeRange'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTypicalAgeRange(array $value) : void
    {
        $this->NudgePropertyValue(
            'typicalAgeRange',
            $value,
            true
        );
    }
}
