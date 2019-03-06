<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasAddressCountry
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|\SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country>
    */
    public function GetAddressCountry() : array
    {
        /**
        * @var array<int, string|\SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'addressCountry',
            $this->RetrievePropertyValueFromData('addressCountry'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|\SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country> $value
    */
    public function SetAddressCountry(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'addressCountry',
            __METHOD__,
            $value,
            Country::class
        );
    }
}
