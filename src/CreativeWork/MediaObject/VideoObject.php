<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup\MusicGroup;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Person> $actor
* @property array<int, string> $caption
* @property array<int, Person> $director
* @property array<int, MusicGroup|Person> $musicBy
* @property array<int, ImageObject> $thumbnail
* @property array<int, string> $transcript
* @property array<int, string> $videoFrameSize
* @property array<int, string> $videoQuality
*/
class VideoObject extends Base
{
    use DaftObjectTraits\HasActor;
    use DaftObjectTraits\HasCaption;
    use DaftObjectTraits\HasDirector;
    use DaftObjectTraits\HasThumbnail;
    use DaftObjectTraits\HasTranscript;

    const SCHEMA_ORG_TYPE = 'VideoObject';

    const PROPERTIES = [
        'actor',
        'caption',
        'director',
        'musicBy',
        'thumbnail',
        'transcript',
        'videoFrameSize',
        'videoQuality',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'actor' => TypeUtilities::MULTI_TYPE_DICT__actor,
        'caption' => TypeUtilities::MULTI_TYPE_DICT__caption,
        'director' => TypeUtilities::MULTI_TYPE_DICT__director,
        'musicBy' => [
            MusicGroup::class,
            Person::class,
        ],
        'thumbnail' => TypeUtilities::MULTI_TYPE_DICT__thumbnail,
        'transcript' => TypeUtilities::MULTI_TYPE_DICT__transcript,
        'videoFrameSize' => [
            'string',
        ],
        'videoQuality' => [
            'string',
        ],
    ];

    /**
    * @return array<int, MusicGroup|Person>
    */
    public function GetMusicBy() : array
    {
        /**
        * @var array<int, MusicGroup|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'musicBy',
            $this->RetrievePropertyValueFromData('musicBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicGroup|Person> $value
    */
    public function SetMusicBy(array $value) : void
    {
        $this->NudgePropertyValue(
            'musicBy',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetVideoFrameSize() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'videoFrameSize',
            $this->RetrievePropertyValueFromData('videoFrameSize'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetVideoFrameSize(array $value) : void
    {
        $this->NudgePropertyValue(
            'videoFrameSize',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetVideoQuality() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'videoQuality',
            $this->RetrievePropertyValueFromData('videoQuality'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetVideoQuality(array $value) : void
    {
        $this->NudgePropertyValue(
            'videoQuality',
            $value,
            true
        );
    }
}
