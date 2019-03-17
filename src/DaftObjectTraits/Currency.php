<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait Currency
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetCurrency() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'currency',
            $this->RetrievePropertyValueFromData('currency'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCurrency(array $value) : void
    {
        $this->NudgePropertyValue(
            'currency',
            $value,
            true
        );
    }
}
