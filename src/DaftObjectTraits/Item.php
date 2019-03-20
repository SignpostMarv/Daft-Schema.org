<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait Item
{
    use DaftObjectTrait;

    /**
    * @return array<int, Thing>
    */
    public function GetItem() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'item',
            $this->RetrievePropertyValueFromData('item'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetItem(array $value) : void
    {
        $this->NudgePropertyValue(
            'item',
            $value
        );
    }
}
