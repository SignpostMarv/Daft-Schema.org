<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'reviewBody',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'reviewRating',
            __METHOD__,
            $value,
            Rating::class
        );
    }
}
