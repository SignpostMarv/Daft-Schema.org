<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait Composer
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetComposer() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'composer',
            $this->RetrievePropertyValueFromData('composer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetComposer(array $value) : void
    {
        $this->NudgePropertyValue('composer', $value);
    }
}
