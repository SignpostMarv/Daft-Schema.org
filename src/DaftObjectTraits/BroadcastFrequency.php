<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\BroadcastFrequencySpecification;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait BroadcastFrequency
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|BroadcastFrequencySpecification>
    */
    public function GetBroadcastFrequency() : array
    {
        /**
        * @var array<int, string|BroadcastFrequencySpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastFrequency',
            $this->RetrievePropertyValueFromData('broadcastFrequency'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|BroadcastFrequencySpecification> $value
    */
    public function SetBroadcastFrequency(array $value) : void
    {
        $this->NudgePropertyValue(
            'broadcastFrequency',
            $value,
            true
        );
    }
}
