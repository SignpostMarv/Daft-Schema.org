<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasHoursAvailable
{
    use DaftObjectTrait;

    /**
    * @return array<int, OpeningHoursSpecification>
    */
    public function GetHoursAvailable() : array
    {
        /**
        * @var array<int, OpeningHoursSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hoursAvailable',
            $this->RetrievePropertyValueFromData('hoursAvailable'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, OpeningHoursSpecification> $value
    */
    public function SetHoursAvailable(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'hoursAvailable',
            __METHOD__,
            $value,
            OpeningHoursSpecification::class
        );
    }
}
