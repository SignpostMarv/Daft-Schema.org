<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating as Base;
use SignpostMarv\DaftObject\TypeUtilities;

class AggregateRating extends Base
{
    const SCHEMA_ORG_TYPE = 'AggregateRating';

    const PROPERTIES = [
        'itemReviewed',
        'ratingCount',
        'reviewCount',
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
