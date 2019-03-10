<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class ProgramMembership extends Base
{
    use DaftObjectTraits\HasMember;

    const SCHEMA_ORG_TYPE = 'ProgramMembership';

    const PROPERTIES = [
        'hostingOrganization',
        'member',
        'membershipNumber',
        'programName',
    ];

    /**
    * @return array<int, Organization>
    */
    public function GetHostingOrganization() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hostingOrganization',
            $this->RetrievePropertyValueFromData('hostingOrganization'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetHostingOrganization(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'hostingOrganization',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetMembershipNumber() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'membershipNumber',
            $this->RetrievePropertyValueFromData('membershipNumber'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetMembershipNumber(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'membershipNumber',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetProgramName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'programName',
            $this->RetrievePropertyValueFromData('programName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetProgramName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'programName',
            __METHOD__,
            $value
        );
    }
}
