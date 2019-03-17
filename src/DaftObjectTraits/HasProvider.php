<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasProvider
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetProvider() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'provider',
            $this->RetrievePropertyValueFromData('provider'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetProvider(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('provider', __METHOD__, $value);
    }
}
