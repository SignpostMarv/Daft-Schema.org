<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MusicReleaseFormatType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Duration;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $catalogNumber
* @property array<int, Organization|Person> $creditedTo
* @property array<int, Duration> $duration
* @property array<int, MusicReleaseFormatType> $musicReleaseFormat
* @property array<int, Organization> $recordLabel
* @property array<int, MusicAlbum> $releaseOf
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'catalogNumber' => [
            'string',
        ],
        'creditedTo' => [
            Organization::class,
            Person::class,
        ],
        'duration' => TypeUtilities::MULTI_TYPE_DICT__duration,
        'musicReleaseFormat' => [
            MusicReleaseFormatType::class,
        ],
        'recordLabel' => [
            Organization::class,
        ],
        'releaseOf' => [
            MusicAlbum::class,
        ],
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
        $this->NudgePropertyValue(
            'catalogNumber',
            $value,
            self::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetCreditedTo() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'creditedTo',
            $this->RetrievePropertyValueFromData('creditedTo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetCreditedTo(array $value) : void
    {
        $this->NudgePropertyValue(
            'creditedTo',
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
        $this->NudgePropertyValue(
            'musicReleaseFormat',
            $value
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
        $this->NudgePropertyValue(
            'recordLabel',
            $value
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
        $this->NudgePropertyValue(
            'releaseOf',
            $value
        );
    }
}
