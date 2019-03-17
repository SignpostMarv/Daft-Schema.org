<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasMember
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetMember() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'member',
            $this->RetrievePropertyValueFromData('member'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetMember(array $value) : void
    {
        $this->NudgePropertyValue(
            'member',
            $value
        );
    }
}
