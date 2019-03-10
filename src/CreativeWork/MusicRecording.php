<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup\MusicGroup;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, MusicGroup> $byArtist
* @property array<int, Duration> $duration
* @property array<int, MusicPlaylist\MusicAlbum> $inAlbum
* @property array<int, MusicPlaylist> $inPlaylist
* @property array<int, string> $isrcCode
* @property array<int, MusicComposition> $recordingOf
*/
class MusicRecording extends Base
{
    use DaftObjectTraits\Duration;

    const SCHEMA_ORG_TYPE = 'MusicRecording';

    const PROPERTIES = [
        'byArtist',
        'duration',
        'inAlbum',
        'inPlaylist',
        'isrcCode',
        'recordingOf',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'byArtist' => [
            MusicGroup::class,
        ],
        'duration' => TypeUtilities::MULTI_TYPE_DICT__duration,
        'inAlbum' => [
            MusicPlaylist\MusicAlbum::class,
        ],
        'inPlaylist' => [
            MusicPlaylist::class,
        ],
        'isrcCode' => [
            'string',
        ],
        'recordingOf' => [
            MusicComposition::class,
        ],
    ];

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
        $this->NudgePropertyValue(
            'byArtist',
            $value
        );
    }

    /**
    * @return array<int, MusicPlaylist\MusicAlbum>
    */
    public function GetInAlbum() : array
    {
        /**
        * @var array<int, MusicPlaylist\MusicAlbum>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'inAlbum',
            $this->RetrievePropertyValueFromData('inAlbum'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicPlaylist\MusicAlbum> $value
    */
    public function SetInAlbum(array $value) : void
    {
        $this->NudgePropertyValue(
            'inAlbum',
            $value
        );
    }

    /**
    * @return array<int, MusicPlaylist>
    */
    public function GetInPlaylist() : array
    {
        /**
        * @var array<int, MusicPlaylist>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'inPlaylist',
            $this->RetrievePropertyValueFromData('inPlaylist'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicPlaylist> $value
    */
    public function SetInPlaylist(array $value) : void
    {
        $this->NudgePropertyValue(
            'inPlaylist',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetIsrcCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isrcCode',
            $this->RetrievePropertyValueFromData('isrcCode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetIsrcCode(array $value) : void
    {
        $this->NudgePropertyValue(
            'isrcCode',
            $value
        );
    }

    /**
    * @return array<int, MusicComposition>
    */
    public function GetRecordingOf() : array
    {
        /**
        * @var array<int, MusicComposition>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'recordingOf',
            $this->RetrievePropertyValueFromData('recordingOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicComposition> $value
    */
    public function SetRecordingOf(array $value) : void
    {
        $this->NudgePropertyValue(
            'recordingOf',
            $value
        );
    }
}
