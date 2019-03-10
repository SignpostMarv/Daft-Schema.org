<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Comment\Answer|ItemList> $acceptedAnswer
* @property array<int, int> $answerCount
* @property array<int, int> $downvoteCount
* @property array<int, Comment\Answer|ItemList> $suggestedAnswer
* @property array<int, int> $upvoteCount
*/
class Question extends Base
{
    use DaftObjectTraits\UpDownVoteCount;

    const SCHEMA_ORG_TYPE = 'Question';

    const PROPERTIES = [
        'acceptedAnswer',
        'answerCount',
        'downvoteCount',
        'suggestedAnswer',
        'upvoteCount',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'acceptedAnswer' => [
            Comment\Answer::class,
            ItemList::class,
        ],
        'answerCount' => [
            'integer',
        ],
        'downvoteCount' => [
            'integer',
        ],
        'suggestedAnswer' => [
            Comment\Answer::class,
            ItemList::class,
        ],
        'upvoteCount' => [
            'integer',
        ],
    ];

    /**
    * @return array<int, Comment\Answer|ItemList>
    */
    public function GetAcceptedAnswer() : array
    {
        /**
        * @var array<int, Comment\Answer|ItemList>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'acceptedAnswer',
            $this->RetrievePropertyValueFromData('acceptedAnswer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Comment\Answer|ItemList> $value
    */
    public function SetAcceptedAnswer(array $value) : void
    {
        $this->NudgePropertyValue(
            'acceptedAnswer',
            $value
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetAnswerCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'answerCount',
            $this->RetrievePropertyValueFromData('answerCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetAnswerCount(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'answerCount',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Comment\Answer|ItemList>
    */
    public function GetSuggestedAnswer() : array
    {
        /**
        * @var array<int, Comment\Answer|ItemList>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'suggestedAnswer',
            $this->RetrievePropertyValueFromData('suggestedAnswer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Comment\Answer|ItemList> $value
    */
    public function SetSuggestedAnswer(array $value) : void
    {
        $this->NudgePropertyValue(
            'suggestedAnswer',
            $value
        );
    }
}
