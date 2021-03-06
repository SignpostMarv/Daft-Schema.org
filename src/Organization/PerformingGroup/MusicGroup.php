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

/**
* @property array<int, MusicAlbum> $album
* @property array<int, string> $genre
* @property array<int, ItemList|MusicRecording> $track
*/
class MusicGroup extends Base
{
    use DaftObjectTraits\Genre;
    use DaftObjectTraits\Track;

    const SCHEMA_ORG_TYPE = 'MusicGroup';

    const PROPERTIES = [
        'album',
        'genre',
        'track',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'album' => [
            MusicAlbum::class,
        ],
        'genre' => [
            'string',
        ],
        'track' => [
            ItemList::class,
            MusicRecording::class,
        ],
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
        $this->NudgePropertyValue(
            'album',
            $value
        );
    }
}
