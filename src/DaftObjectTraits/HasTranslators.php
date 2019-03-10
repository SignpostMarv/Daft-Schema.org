<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasTranslators
{
    use DaftObjectTrait;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetTranslator() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'translator',
            $this->RetrievePropertyValueFromData('translator'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetTranslator(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('translator', __METHOD__, $value);
    }
}
