<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasDirector
{
    use DaftObjectTrait;

    /**
    * @return array<int, Person>
    */
    public function GetDirector() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'director',
            $this->RetrievePropertyValueFromData('director'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetDirector(array $value) : void
    {
        $this->NudgePropertyValue('director', $value);
    }
}
