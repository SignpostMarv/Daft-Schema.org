<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Event;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'event',
            __METHOD__,
            $value,
            Event::class
        );
    }
}
