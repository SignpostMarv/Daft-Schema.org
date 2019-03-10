<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasReview
{
    use DaftObjectTrait;

    /**
    * @return array<int, Review>
    */
    public function GetReview() : array
    {
        /**
        * @var array<int, Review>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'review',
            $this->RetrievePropertyValueFromData('review'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Review> $value
    */
    public function SetReview(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'review',
            __METHOD__,
            $value,
            Review::class
        );
    }
}
