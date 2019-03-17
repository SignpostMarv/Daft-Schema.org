<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasCategory
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Thing|PhysicalActivityCategory>
    */
    public function GetCategory() : array
    {
        /**
        * @var array<int, string|Thing|PhysicalActivityCategory>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'category',
            $this->RetrievePropertyValueFromData('category'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Thing|PhysicalActivityCategory> $value
    */
    public function SetCategory(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'category',
            __METHOD__,
            $value,
            PhysicalActivityCategory::class,
            Thing::class
        );
    }
}
