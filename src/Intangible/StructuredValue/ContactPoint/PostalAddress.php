<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string|Country> $addressCountry
* @property array<int, string> $addressLocality
* @property array<int, string> $addressRegion
* @property array<int, string> $postalCode
* @property array<int, string> $postOfficeBoxNumber
* @property array<int, string> $streetAddress
*/
class PostalAddress extends Base
{
    use DaftObjectTraits\HasAddressCountry;
    use DaftObjectTraits\HasPostalCode;

    const SCHEMA_ORG_TYPE = 'PostalAddress';

    const PROPERTIES = [
        'addressCountry',
        'addressLocality',
        'addressRegion',
        'postOfficeBoxNumber',
        'postalCode',
        'streetAddress',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'addressCountry' => [
            'string',
            Country::class,
        ],
        'addressLocality' => [
            'string',
        ],
        'addressRegion' => [
            'string',
        ],
        'postalCode' => [
            'string',
        ],
        'postOfficeBoxNumber' => [
            'string',
        ],
        'streetAddress' => [
            'string',
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetAddressLocality() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'addressLocality',
            $this->RetrievePropertyValueFromData('addressLocality'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAddressLocality(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'addressLocality',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAddressRegion() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'addressRegion',
            $this->RetrievePropertyValueFromData('addressRegion'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAddressRegion(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'addressRegion',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPostOfficeBoxNumber() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'postOfficeBoxNumber',
            $this->RetrievePropertyValueFromData('postOfficeBoxNumber'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPostOfficeBoxNumber(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'postOfficeBoxNumber',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetStreetAddress() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'streetAddress',
            $this->RetrievePropertyValueFromData('streetAddress'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetStreetAddress(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'streetAddress',
            __METHOD__,
            $value
        );
    }
}
