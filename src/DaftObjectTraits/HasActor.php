<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait HasActor
{
    use DaftObjectTrait;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetActor() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'actor',
            $this->RetrievePropertyValueFromData('actor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetActor(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('actor', __METHOD__, $value);
    }
}
