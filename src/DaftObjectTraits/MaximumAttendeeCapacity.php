<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'maximumAttendeeCapacity',
            $this->RetrievePropertyValueFromData('maximumAttendeeCapacity'),
            static::class
        );

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
