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
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'musicBy',
            __METHOD__,
            $value,
            MusicGroup::class,
            Person::class
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'videoFrameSize',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'videoQuality',
            __METHOD__,
            $value
        );
    }
}
