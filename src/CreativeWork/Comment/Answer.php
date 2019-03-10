<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Comment;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Comment as Base;

/**
* @property array<int, int> $downvoteCount
* @property array<int, Question> $parentItem
* @property array<int, int> $upvoteCount
*/
class Answer extends Base
{
    const SCHEMA_ORG_TYPE = 'Answer';
}
