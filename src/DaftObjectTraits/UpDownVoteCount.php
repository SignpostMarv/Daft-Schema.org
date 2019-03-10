<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait UpDownVoteCount
{
    use DaftObjectTrait;

    /**
    * @return array<int, int>
    */
    public function GetDownvoteCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'downvoteCount',
            $this->RetrievePropertyValueFromData('downvoteCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetDownvoteCount(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'downvoteCount',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetUpvoteCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'upvoteCount',
            $this->RetrievePropertyValueFromData('upvoteCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetUpvoteCount(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'upvoteCount',
            __METHOD__,
            $value
        );
    }
}
