<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Brand;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasBrand
{
    use DaftObjectTrait;

    /**
    * @return array<int, Brand|Organization>
    */
    public function GetBrand() : array
    {
        /**
        * @var array<int, Brand|Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'brand',
            $this->RetrievePropertyValueFromData('brand'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Brand|Organization> $value
    */
    public function SetBrand(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'brand',
            __METHOD__,
            $value,
            Brand::class,
            Organization::class
        );
    }
}
