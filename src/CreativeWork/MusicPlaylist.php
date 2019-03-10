<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int> $numTracks
* @property array<int, ItemList|MusicRecording> $track
*/
class MusicPlaylist extends Base
{
    const SCHEMA_ORG_TYPE = 'MusicPlaylist';

    const PROPERTIES = [
        'numTracks',
        'track',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'numTracks' => [
            'integer',
        ],
        'track' => [
            ItemList::class,
            MusicRecording::class,
        ],
    ];

    /**
    * @return array<int, int>
    */
    public function GetNumTracks() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'numTracks',
            $this->RetrievePropertyValueFromData('numTracks'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetNumTracks(array $value) : void
    {
        $this->NudgePropertyValue(
            'numTracks',
            $value
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
        $this->NudgePropertyValue(
            'track',
            $value
        );
    }
}
