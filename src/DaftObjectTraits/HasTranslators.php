<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasTranslators
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetTranslator() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'translator',
            $this->RetrievePropertyValueFromData('translator'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetTranslator(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('translator', __METHOD__, $value);
    }
}
