<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int> $downvoteCount
* @property array<int, Question> $parentItem
* @property array<int, int> $upvoteCount
*/
class Comment extends Base
{
    use DaftObjectTraits\UpDownVoteCount;

    const SCHEMA_ORG_TYPE = 'Comment';

    const PROPERTIES = [
        'downvoteCount',
        'parentItem',
        'upvoteCount',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'downvoteCount' => [
            'integer',
        ],
        'parentItem' => [
            Question::class,
        ],
        'upvoteCount' => [
            'integer',
        ],
    ];

    /**
    * @return array<int, Question>
    */
    public function GetParentItem() : array
    {
        /**
        * @var array<int, Question>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'parentItem',
            $this->RetrievePropertyValueFromData('parentItem'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Question> $value
    */
    public function SetParentItem(array $value) : void
    {
        $this->NudgePropertyValue(
            'parentItem',
            $value
        );
    }
}
