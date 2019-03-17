<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasSponsors
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetSponsor() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sponsor',
            $this->RetrievePropertyValueFromData('sponsor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetSponsor(array $value) : void
    {
        $this->NudgePropertyValue('sponsor', $value);
    }
}
