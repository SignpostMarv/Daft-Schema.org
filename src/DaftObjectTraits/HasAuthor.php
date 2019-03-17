<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAuthor
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetAuthor() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'author',
            $this->RetrievePropertyValueFromData('author'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetAuthor(array $value) : void
    {
        $this->NudgePropertyValue('author', $value);
    }
}
