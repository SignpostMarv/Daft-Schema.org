<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Thing> $itemReviewed
* @property array<int, string> $reviewAspect
* @property array<int, string> $reviewBody
* @property array<int, Rating> $reviewRating
*/
class Review extends Base
{
    use DaftObjectTraits\HasReviewAspect;
    use DaftObjectTraits\HasItemReviewed;

    const SCHEMA_ORG_TYPE = 'Review';

    const PROPERTIES = [
        'itemReviewed',
        'reviewAspect',
        'reviewBody',
        'reviewRating',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'itemReviewed' => TypeUtilities::MULTI_TYPE_DICT__itemReviewed,
        'reviewAspect' => TypeUtilities::MULTI_TYPE_DICT__reviewAspect,
        'reviewBody' => [
            'string',
        ],
        'reviewRating' => [
            Rating::class,
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetReviewBody() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'reviewBody',
            $this->RetrievePropertyValueFromData('reviewBody'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetReviewBody(array $value) : void
    {
        $this->NudgePropertyValue(
            'reviewBody',
            $value,
            true
        );
    }

    /**
    * @return array<int, Rating>
    */
    public function GetReviewRating() : array
    {
        /**
        * @var array<int, Rating>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'reviewRating',
            $this->RetrievePropertyValueFromData('reviewRating'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Rating> $value
    */
    public function SetReviewRating(array $value) : void
    {
        $this->NudgePropertyValue(
            'reviewRating',
            $value
        );
    }
}
