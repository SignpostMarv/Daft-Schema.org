<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

trait MaximumAttendeeCapacity
{
    use DaftObjectTrait;

    /**
    * @return array<int, int>
    */
    public function GetMaximumAttendeeCapacity() : array
    {
        /**
        * @var array<int, int>
        */
        $out = $this->ExpectRetrievedValueIsArray('maximumAttendeeCapacity');

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetMaximumAttendeeCapacity(array $value) : void
    {
        $this->NudgePropertyValue('maximumAttendeeCapacity', $value);
    }
}
