<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait HasDirector
{
    use DaftObjectTrait;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetDirector() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'director',
            $this->RetrievePropertyValueFromData('director'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetDirector(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('director', __METHOD__, $value);
    }
}
