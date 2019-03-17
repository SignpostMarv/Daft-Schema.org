<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Event;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasEvent
{
    use DaftObjectTrait;

    /**
    * @return array<int, Event>
    */
    public function GetEvent() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'event',
            $this->RetrievePropertyValueFromData('event'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetEvent(array $value) : void
    {
        $this->NudgePropertyValue(
            'event',
            $value
        );
    }
}
