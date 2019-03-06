<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OwnershipInfo;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasOwns
{
    use DaftObjectTrait;

    /**
    * @return array<int, OwnershipInfo|Product>
    */
    public function GetOwns() : array
    {
        /**
        * @var array<int, OwnershipInfo|Product>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'owns',
            $this->RetrievePropertyValueFromData('owns'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, OwnershipInfo|Product> $value
    */
    public function SetOwns(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'owns',
            __METHOD__,
            $value,
            OwnershipInfo::class,
            Product::class
        );
    }
}
