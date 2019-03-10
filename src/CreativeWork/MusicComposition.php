<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Event;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Organization|Person> $composer
* @property array<int, Event> $firstPerformance
* @property array<int, MusicComposition> $includedComposition
* @property array<int, string> $iswcCode
* @property array<int, Person> $lyricist
* @property array<int, Base> $lyrics
* @property array<int, MusicComposition> $musicArrangement
* @property array<int, string> $musicCompositionForm
* @property array<int, string> $musicalKey
* @property array<int, MusicRecording> $recordedAs
*/
class MusicComposition extends Base
{
    use DaftObjectTraits\Composer;

    const SCHEMA_ORG_TYPE = 'MusicComposition';

    const PROPERTIES = [
        'composer',
        'firstPerformance',
        'includedComposition',
        'iswcCode',
        'lyricist',
        'lyrics',
        'musicArrangement',
        'musicCompositionForm',
        'musicalKey',
        'recordedAs',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'composer' => [
            Organization::class,
            Person::class,
        ],
        'firstPerformance' => [
            Event::class,
        ],
        'includedComposition' => [
            MusicComposition::class,
        ],
        'iswcCode' => [
            'string',
        ],
        'lyricist' => [
            Person::class,
        ],
        'lyrics' => [
            Base::class,
        ],
        'musicArrangement' => [
            MusicComposition::class,
        ],
        'musicCompositionForm' => [
            'string',
        ],
        'musicalKey' => [
            'string',
        ],
        'recordedAs' => [
            MusicRecording::class,
        ],
    ];

    /**
    * @return array<int, Event>
    */
    public function GetFirstPerformance() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'firstPerformance',
            $this->RetrievePropertyValueFromData('firstPerformance'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetFirstPerformance(array $value) : void
    {
        $this->NudgePropertyValue(
            'firstPerformance',
            $value
        );
    }

    /**
    * @return array<int, MusicComposition>
    */
    public function GetIncludedComposition() : array
    {
        /**
        * @var array<int, MusicComposition>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'includedComposition',
            $this->RetrievePropertyValueFromData('includedComposition'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicComposition> $value
    */
    public function SetIncludedComposition(array $value) : void
    {
        $this->NudgePropertyValue(
            'includedComposition',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetIswcCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'iswcCode',
            $this->RetrievePropertyValueFromData('iswcCode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetIswcCode(array $value) : void
    {
        $this->NudgePropertyValue(
            'iswcCode',
            $value,
            true
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetLyricist() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'lyricist',
            $this->RetrievePropertyValueFromData('lyricist'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetLyricist(array $value) : void
    {
        $this->NudgePropertyValue(
            'lyricist',
            $value
        );
    }

    /**
    * @return array<int, Base>
    */
    public function GetLyrics() : array
    {
        /**
        * @var array<int, Base>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'lyrics',
            $this->RetrievePropertyValueFromData('lyrics'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Base> $value
    */
    public function SetLyrics(array $value) : void
    {
        $this->NudgePropertyValue(
            'lyrics',
            $value
        );
    }

    /**
    * @return array<int, MusicComposition>
    */
    public function GetMusicArrangement() : array
    {
        /**
        * @var array<int, MusicComposition>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'musicArrangement',
            $this->RetrievePropertyValueFromData('musicArrangement'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicComposition> $value
    */
    public function SetMusicArrangement(array $value) : void
    {
        $this->NudgePropertyValue(
            'musicArrangement',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetMusicCompositionForm() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'musicCompositionForm',
            $this->RetrievePropertyValueFromData('musicCompositionForm'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetMusicCompositionForm(array $value) : void
    {
        $this->NudgePropertyValue(
            'musicCompositionForm',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetMusicalKey() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'musicalKey',
            $this->RetrievePropertyValueFromData('musicalKey'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetMusicalKey(array $value) : void
    {
        $this->NudgePropertyValue(
            'musicalKey',
            $value,
            true
        );
    }

    /**
    * @return array<int, MusicRecording>
    */
    public function GetRecordedAs() : array
    {
        /**
        * @var array<int, MusicRecording>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'recordedAs',
            $this->RetrievePropertyValueFromData('recordedAs'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicRecording> $value
    */
    public function SetRecordedAs(array $value) : void
    {
        $this->NudgePropertyValue(
            'recordedAs',
            $value
        );
    }
}
