<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $author
* @property array<int, string|float|int> $bestRating
* @property array<int, string|float|int> $ratingValue
* @property array<int, string> $reviewAspect
* @property array<int, string|float|int> $worstRating
*/
class Rating extends Base
{
    use DaftObjectTraits\HasAuthor;
    use DaftObjectTraits\HasReviewAspect;

    const SCHEMA_ORG_TYPE = 'Rating';

    const PROPERTIES = [
        'author',
        'bestRating',
        'ratingValue',
        'reviewAspect',
        'worstRating',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'author' => TypeUtilities::MULTI_TYPE_DICT__author,
        'bestRating' => [
            'string',
            'double',
            'integer',
        ],
        'ratingValue' => [
            'string',
            'double',
            'integer',
        ],
        'reviewAspect' => TypeUtilities::MULTI_TYPE_DICT__reviewAspect,
        'worstRating' => [
            'string',
            'double',
            'integer',
        ],
    ];

    /**
    * @return array<int, string|float|int>
    */
    public function GetBestRating() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'bestRating',
            $this->RetrievePropertyValueFromData('bestRating'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetBestRating(array $value) : void
    {
        $this->NudgePropertyValue(
            'bestRating',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, string|float|int>
    */
    public function GetRatingValue() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ratingValue',
            $this->RetrievePropertyValueFromData('ratingValue'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetRatingValue(array $value) : void
    {
        $this->NudgePropertyValue(
            'ratingValue',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, string|float|int>
    */
    public function GetWorstRating() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'worstRating',
            $this->RetrievePropertyValueFromData('worstRating'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetWorstRating(array $value) : void
    {
        $this->NudgePropertyValue(
            'worstRating',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
