<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasPostalCode
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetPostalCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'postalCode',
            $this->RetrievePropertyValueFromData('postalCode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPostalCode(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'postalCode',
            __METHOD__,
            $value
        );
    }
}
