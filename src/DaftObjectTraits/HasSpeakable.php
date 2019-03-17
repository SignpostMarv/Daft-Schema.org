<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\SpeakableSpecification;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasSpeakable
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|SpeakableSpecification>
    */
    public function GetSpeakable() : array
    {
        /**
        * @var array<int, string|SpeakableSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'speakable',
            $this->RetrievePropertyValueFromData('speakable'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|SpeakableSpecification> $value
    */
    public function SetSpeakable(array $value) : void
    {
        $this->NudgePropertyValue(
            'speakable',
            $value,
            true
        );
    }
}
