<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Thing> $itemReviewed
* @property array<int, int> $ratingCount
* @property array<int, int> $reviewCount
*/
class AggregateRating extends Base
{
    use DaftObjectTraits\HasItemReviewed;

    const SCHEMA_ORG_TYPE = 'AggregateRating';

    const PROPERTIES = [
        'itemReviewed',
        'ratingCount',
        'reviewCount',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'itemReviewed' => TypeUtilities::MULTI_TYPE_DICT__itemReviewed,
        'ratingCount' => [
            'integer',
        ],
        'reviewCount' => [
            'integer',
        ],
    ];

    /**
    * @return array<int, int>
    */
    public function GetRatingCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ratingCount',
            $this->RetrievePropertyValueFromData('ratingCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetRatingCount(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'ratingCount',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetReviewCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'reviewCount',
            $this->RetrievePropertyValueFromData('reviewCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetReviewCount(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'reviewCount',
            __METHOD__,
            $value
        );
    }
}
