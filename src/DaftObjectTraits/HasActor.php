<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasActor
{
    use DaftObjectTrait;

    /**
    * @return array<int, Person>
    */
    public function GetActor() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'actor',
            $this->RetrievePropertyValueFromData('actor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetActor(array $value) : void
    {
        $this->NudgePropertyValue('actor', $value);
    }
}
