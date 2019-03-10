<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasMaterial
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Product>
    */
    public function GetMaterial() : array
    {
        /**
        * @var array<int, string|Product>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'material',
            $this->RetrievePropertyValueFromData('material'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Product> $value
    */
    public function SetMaterial(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'material',
            __METHOD__,
            $value,
            Product::class
        );
    }
}
