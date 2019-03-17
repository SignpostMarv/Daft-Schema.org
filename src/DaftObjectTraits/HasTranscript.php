<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasTranscript
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetTranscript() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'transcript',
            $this->RetrievePropertyValueFromData('transcript'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTranscript(array $value) : void
    {
        $this->NudgePropertyValue(
            'transcript',
            $value,
            true
        );
    }
}
