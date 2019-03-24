<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Organization> $hostingOrganization
* @property array<int, Organization|Person> $member
* @property array<int, string> $membershipNumber
* @property array<int, string> $programName
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'hostingOrganization' => [
            Organization::class,
        ],
        'member' => [
            Organization::class,
            Person::class,
        ],
        'membershipNumber' => [
            'string',
        ],
        'programName' => [
            'string',
        ],
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
        $this->NudgePropertyValue(
            'hostingOrganization',
            $value
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
        $this->NudgePropertyValue(
            'membershipNumber',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
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
        $this->NudgePropertyValue(
            'programName',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
