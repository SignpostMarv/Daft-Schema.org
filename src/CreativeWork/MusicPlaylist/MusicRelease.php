<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MusicReleaseFormatType;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\TypeUtilities;

class MusicRelease extends Base
{
    use DaftObjectTraits\Duration;

    const SCHEMA_ORG_TYPE = 'MusicRelease';

    const PROPERTIES = [
        'catalogNumber',
        'creditedTo',
        'duration',
        'musicReleaseFormat',
        'recordLabel',
        'releaseOf',
    ];

    /**
    * @return array<int, string>
    */
    public function GetCatalogNumber() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'catalogNumber',
            $this->RetrievePropertyValueFromData('catalogNumber'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCatalogNumber(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'catalogNumber',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetCreditedTo() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'creditedTo',
            $this->RetrievePropertyValueFromData('creditedTo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetCreditedTo(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons(
            'creditedTo',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, MusicReleaseFormatType>
    */
    public function GetMusicReleaseFormat() : array
    {
        /**
        * @var array<int, MusicReleaseFormatType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'musicReleaseFormat',
            $this->RetrievePropertyValueFromData('musicReleaseFormat'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicReleaseFormatType> $value
    */
    public function SetMusicReleaseFormat(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'musicReleaseFormat',
            __METHOD__,
            $value,
            MusicReleaseFormatType::class
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetRecordLabel() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'recordLabel',
            $this->RetrievePropertyValueFromData('recordLabel'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetRecordLabel(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'recordLabel',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, MusicAlbum>
    */
    public function GetReleaseOf() : array
    {
        /**
        * @var array<int, MusicAlbum>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'releaseOf',
            $this->RetrievePropertyValueFromData('releaseOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicAlbum> $value
    */
    public function SetReleaseOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'releaseOf',
            __METHOD__,
            $value,
            MusicAlbum::class
        );
    }
}
