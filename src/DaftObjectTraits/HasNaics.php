<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasNaics
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetNaics() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'naics',
            $this->RetrievePropertyValueFromData('naics'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetNaics(array $value) : void
    {
        $this->NudgePropertyValue(
            'naics',
            $value,
            true
        );
    }
}
