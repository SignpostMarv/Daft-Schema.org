<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAddress
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|\SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress>
    */
    public function GetAddress() : array
    {
        /**
        * @var array<int, string|\SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'address',
            $this->RetrievePropertyValueFromData('address'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|\SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress> $value
    */
    public function SetAddress(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'address',
            __METHOD__,
            $value,
            PostalAddress::class
        );
    }
}
