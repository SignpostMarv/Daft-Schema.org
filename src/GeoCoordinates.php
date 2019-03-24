<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country;

/**
* @property array<int, string|PostalAddress> $address
* @property array<int, string|Country> $addressCountry
* @property array<int, string|float|int> $elevation
* @property array<int, string|float|int> $latitude
* @property array<int, string|float|int> $longitude
* @property array<int, string> $postalCode
*/
class GeoCoordinates extends Thing
{
    use DaftObjectTraits\HasAddress;
    use DaftObjectTraits\HasAddressCountry;
    use DaftObjectTraits\HasElevation;
    use DaftObjectTraits\HasPostalCode;

    const SCHEMA_ORG_TYPE = 'GeoCoordinates';

    const PROPERTIES = [
        'address',
        'addressCountry',
        'elevation',
        'latitude',
        'longitude',
        'postalCode',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'address' => [
            'string',
            PostalAddress::class,
        ],
        'addressCountry' => [
            'string',
            Country::class,
        ],
        'elevation' => [
            'string',
            'double',
            'integer',
        ],
        'latitude' => [
            'string',
            'double',
            'integer',
        ],
        'longitude' => [
            'string',
            'double',
            'integer',
        ],
        'postalCode' => [
            'string',
        ],
    ];

    /**
    * @return array<int, string|float|int>
    */
    public function GetLatitude() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = $this->ExpectRetrievedValueIsArray('latitude');

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetLatitude(array $value) : void
    {
        $this->NudgePropertyValue('latitude', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string|float|int>
    */
    public function GetLongitude() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = $this->ExpectRetrievedValueIsArray('longitude');

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetLongitude(array $value) : void
    {
        $this->NudgePropertyValue('longitude', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }
}
