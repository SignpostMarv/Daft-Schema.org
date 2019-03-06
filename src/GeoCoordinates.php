<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\TypeUtilities;

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

    /**
    * @return array<int, string|float|int>
    */
    public function GetLatitude() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'latitude',
            $this->RetrievePropertyValueFromData('latitude'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetLatitude(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'latitude',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string|float|int>
    */
    public function GetLongitude() : array
    {
        /**
        * @var array<int, string|float|int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'longitude',
            $this->RetrievePropertyValueFromData('longitude'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|float|int> $value
    */
    public function SetLongitude(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
            'longitude',
            __METHOD__,
            $value
        );
    }
}
