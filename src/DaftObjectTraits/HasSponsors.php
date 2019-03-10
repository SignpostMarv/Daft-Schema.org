<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasSponsors
{
    use DaftObjectTrait;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetSponsor() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sponsor',
            $this->RetrievePropertyValueFromData('sponsor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetSponsor(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('sponsor', __METHOD__, $value);
    }
}
