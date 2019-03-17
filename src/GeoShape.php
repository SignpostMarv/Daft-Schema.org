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
* @property array<int, string> $box
* @property array<int, string> $circle
* @property array<int, string|float|int> $elevation
* @property array<int, string> $line
* @property array<int, string> $polygon
* @property array<int, string> $postalCode
*/
class GeoShape extends Thing
{
    use DaftObjectTraits\HasAddress;
    use DaftObjectTraits\HasAddressCountry;
    use DaftObjectTraits\HasElevation;
    use DaftObjectTraits\HasPostalCode;

    const SCHEMA_ORG_TYPE = 'GeoShape';

    const PROPERTIES = [
        'address',
        'addressCountry',
        'box',
        'circle',
        'elevation',
        'line',
        'polygon',
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
        'box' => [
            'string',
        ],
        'circle' => [
            'string',
        ],
        'elevation' => [
            'string',
            'double',
            'integer',
        ],
        'line' => [
            'string',
        ],
        'polygon' => [
            'string',
        ],
        'postalCode' => [
            'string',
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetBox() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('box');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBox(array $value) : void
    {
        $this->NudgePropertyValue('box', $value, true);
    }

    /**
    * @return array<int, string>
    */
    public function GetCircle() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('circle');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCircle(array $value) : void
    {
        $this->NudgePropertyValue('circle', $value, true);
    }

    /**
    * @return array<int, string>
    */
    public function GetLine() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('line');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLine(array $value) : void
    {
        $this->NudgePropertyValue('line', $value, true);
    }

    /**
    * @return array<int, string>
    */
    public function GetPolygon() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('polygon');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPolygon(array $value) : void
    {
        $this->NudgePropertyValue('polygon', $value, true);
    }
}
