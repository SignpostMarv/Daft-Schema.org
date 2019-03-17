<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAggregateRating
{
    use DaftObjectTrait;

    /**
    * @return array<int, AggregateRating>
    */
    public function GetAggregateRating() : array
    {
        /**
        * @var array<int, AggregateRating>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'aggregateRating',
            $this->RetrievePropertyValueFromData('aggregateRating'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, AggregateRating> $value
    */
    public function SetAggregateRating(array $value) : void
    {
        $this->NudgePropertyValue(
            'aggregateRating',
            $value
        );
    }
}
