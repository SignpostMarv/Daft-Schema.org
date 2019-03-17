<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAddressCountry
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Country>
    */
    public function GetAddressCountry() : array
    {
        /**
        * @var array<int, string|Country>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'addressCountry',
            $this->RetrievePropertyValueFromData('addressCountry'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Country> $value
    */
    public function SetAddressCountry(array $value) : void
    {
        $this->NudgePropertyValue(
            'addressCountry',
            $value,
            true
        );
    }
}
