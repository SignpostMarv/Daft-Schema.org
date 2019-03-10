<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicPlaylist\MusicAlbum;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicRecording;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList;
use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class MusicGroup extends Base
{
    use DaftObjectTraits\Genre;

    const SCHEMA_ORG_TYPE = 'MusicGroup';

    const PROPERTIES = [
        'album',
        'genre',
        'track',
    ];

    /**
    * @return array<int, MusicAlbum>
    */
    public function GetAlbum() : array
    {
        /**
        * @var array<int, MusicAlbum>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'album',
            $this->RetrievePropertyValueFromData('album'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicAlbum> $value
    */
    public function SetAlbum(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'album',
            __METHOD__,
            $value,
            MusicAlbum::class
        );
    }

    /**
    * @return array<int, ItemList|MusicRecording>
    */
    public function GetTrack() : array
    {
        /**
        * @var array<int, ItemList|MusicRecording>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'track',
            $this->RetrievePropertyValueFromData('track'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ItemList|MusicRecording> $value
    */
    public function SetTrack(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'track',
            __METHOD__,
            $value,
            ItemList::class,
            MusicRecording::class
        );
    }
}
