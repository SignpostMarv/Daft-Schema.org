<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

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

    /**
    * @return array<int, string>
    */
    public function GetBox() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'box',
            $this->RetrievePropertyValueFromData('box'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBox(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'box',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetCircle() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'circle',
            $this->RetrievePropertyValueFromData('circle'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCircle(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'circle',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetLine() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'line',
            $this->RetrievePropertyValueFromData('line'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLine(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'line',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPolygon() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'polygon',
            $this->RetrievePropertyValueFromData('polygon'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPolygon(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'polygon',
            __METHOD__,
            $value
        );
    }
}
