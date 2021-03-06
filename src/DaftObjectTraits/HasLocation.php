<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasLocation
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Place|PostalAddress>
    */
    public function GetLocation() : array
    {
        /**
        * @var array<int, string|Place|PostalAddress>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'location',
            $this->RetrievePropertyValueFromData('location'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Place|PostalAddress> $value
    */
    public function SetLocation(array $value) : void
    {
        $this->NudgePropertyValue(
            'location',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
