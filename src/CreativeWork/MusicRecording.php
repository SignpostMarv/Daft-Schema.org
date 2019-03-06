<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup\MusicGroup;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'inAlbum',
            __METHOD__,
            $value,
            MusicPlaylist\MusicAlbum::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'inPlaylist',
            __METHOD__,
            $value,
            MusicPlaylist::class
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'isrcCode',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, MusicComposition>
    */
    public function GetIsRecordingOf() : array
    {
        /**
        * @var array<int, MusicComposition>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isRecordingOf',
            $this->RetrievePropertyValueFromData('isRecordingOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicComposition> $value
    */
    public function SetIsRecordingOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'isRecordingOf',
            __METHOD__,
            $value,
            MusicComposition::class
        );
    }
}
