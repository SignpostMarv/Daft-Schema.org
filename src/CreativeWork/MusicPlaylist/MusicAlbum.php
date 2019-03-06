<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MusicAlbumProductionType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MusicAlbumReleaseType;
use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup\MusicGroup;
use SignpostMarv\DaftObject\TypeUtilities;

class MusicAlbum extends Base
{
    const SCHEMA_ORG_TYPE = 'MusicAlbum';

    const PROPERTIES = [
        'albumProductionType',
        'albumRelease',
        'albumReleaseType',
        'byArtist',
    ];

    /**
    * @return array<int, MusicAlbumProductionType>
    */
    public function GetAlbumProductionType() : array
    {
        /**
        * @var array<int, MusicAlbumProductionType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'albumProductionType',
            $this->RetrievePropertyValueFromData('albumProductionType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicAlbumProductionType> $value
    */
    public function SetAlbumProductionType(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'albumProductionType',
            __METHOD__,
            $value,
            MusicAlbumProductionType::class
        );
    }

    /**
    * @return array<int, MusicRelease>
    */
    public function GetAlbumRelease() : array
    {
        /**
        * @var array<int, MusicRelease>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'albumRelease',
            $this->RetrievePropertyValueFromData('albumRelease'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicRelease> $value
    */
    public function SetAlbumRelease(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'albumRelease',
            __METHOD__,
            $value,
            MusicRelease::class
        );
    }

    /**
    * @return array<int, MusicAlbumReleaseType>
    */
    public function GetAlbumReleaseType() : array
    {
        /**
        * @var array<int, MusicAlbumReleaseType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'albumReleaseType',
            $this->RetrievePropertyValueFromData('albumReleaseType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicAlbumReleaseType> $value
    */
    public function SetAlbumReleaseType(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'albumReleaseType',
            __METHOD__,
            $value,
            MusicAlbumReleaseType::class
        );
    }

    /**
    * @return array<int, MusicGroup>
    */
    public function GetByArtist() : array
    {
        /**
        * @var array<int, MusicGroup>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'byArtist',
            $this->RetrievePropertyValueFromData('byArtist'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicGroup> $value
    */
    public function SetByArtist(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'byArtist',
            __METHOD__,
            $value,
            MusicGroup::class
        );
    }
}
