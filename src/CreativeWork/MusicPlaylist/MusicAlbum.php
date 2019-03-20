<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MusicAlbumProductionType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MusicAlbumReleaseType;
use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup\MusicGroup;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, MusicAlbumProductionType> $albumProductionType
* @property array<int, MusicRelease> $albumRelease
* @property array<int, MusicAlbumReleaseType> $albumReleaseType
* @property array<int, MusicGroup> $byArtist
*/
class MusicAlbum extends Base
{
    use DaftObjectTraits\ByArtist;

    const SCHEMA_ORG_TYPE = 'MusicAlbum';

    const PROPERTIES = [
        'albumProductionType',
        'albumRelease',
        'albumReleaseType',
        'byArtist',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'albumProductionType' => [
            MusicAlbumProductionType::class,
        ],
        'albumRelease' => [
            MusicRelease::class,
        ],
        'albumReleaseType' => [
            MusicAlbumReleaseType::class,
        ],
        'byArtist' => [
            MusicGroup::class,
        ],
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
        $this->NudgePropertyValue(
            'albumProductionType',
            $value
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
        $this->NudgePropertyValue(
            'albumRelease',
            $value
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
        $this->NudgePropertyValue(
            'albumReleaseType',
            $value
        );
    }
}
