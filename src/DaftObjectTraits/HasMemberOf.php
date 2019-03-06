<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\ProgramMembership;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasMemberOf
{
    use DaftObjectTrait;

    /**
    * @return array<int, Organization|ProgramMembership>
    */
    public function GetMemberOf() : array
    {
        /**
        * @var array<int, Organization|ProgramMembership>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'memberOf',
            $this->RetrievePropertyValueFromData('memberOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|ProgramMembership> $value
    */
    public function SetMemberOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'memberOf',
            __METHOD__,
            $value,
            Organization::class,
            ProgramMembership::class
        );
    }
}
