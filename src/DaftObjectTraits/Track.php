<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MusicRecording;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait Track
{
    use DaftObjectTrait;

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
