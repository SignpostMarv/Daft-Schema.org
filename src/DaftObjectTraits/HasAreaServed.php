<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\GeoShape;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAreaServed
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|AdministrativeArea|GeoShape|Place>
    */
    public function GetAreaServed() : array
    {
        /**
        * @var array<int, string|AdministrativeArea|GeoShape|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'areaServed',
            $this->RetrievePropertyValueFromData('areaServed'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|AdministrativeArea|GeoShape|Place> $value
    */
    public function SetAreaServed(array $value) : void
    {
        $this->NudgePropertyValue(
            'areaServed',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
