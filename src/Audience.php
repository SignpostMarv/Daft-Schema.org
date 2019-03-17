<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

/**
* @property array<int, string> $audienceType
* @property array<int, Place\AdministrativeArea> $geographicArea
*/
class Audience extends Thing
{
    const SCHEMA_ORG_TYPE = 'Audience';

    const PROPERTIES = [
        'audienceType',
        'geographicArea',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'audienceType' => [
            'string',
        ],
        'geographicArea' => [
            Place\AdministrativeArea::class,
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetAudienceType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'audienceType',
            $this->RetrievePropertyValueFromData('audienceType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAudienceType(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'audienceType',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Place\AdministrativeArea>
    */
    public function GetGeographicArea() : array
    {
        /**
        * @var array<int, Place\AdministrativeArea>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geographicArea',
            $this->RetrievePropertyValueFromData('geographicArea'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place\AdministrativeArea> $value
    */
    public function SetGeographicArea(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geographicArea',
            __METHOD__,
            $value,
            Place\AdministrativeArea::class
        );
    }
}
