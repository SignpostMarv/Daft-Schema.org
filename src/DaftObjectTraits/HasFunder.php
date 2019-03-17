<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasFunder
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|Person>
    */
    public function GetFunder() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'funder',
            $this->RetrievePropertyValueFromData('funder'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetFunder(array $value) : void
    {
        $this->NudgePropertyValue('funder', $value);
    }
}
