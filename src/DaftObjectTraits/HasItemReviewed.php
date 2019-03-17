<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasItemReviewed
{
    use DaftObjectTrait;

    /**
    * @return array<int, Thing>
    */
    public function GetItemReviewed() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemReviewed',
            $this->RetrievePropertyValueFromData('itemReviewed'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetItemReviewed(array $value) : void
    {
        $this->NudgePropertyValue(
            'itemReviewed',
            $value
        );
    }
}
