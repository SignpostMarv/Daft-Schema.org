<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'bestRating',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'ratingValue',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'worstRating',
            __METHOD__,
            $value
        );
    }
}
