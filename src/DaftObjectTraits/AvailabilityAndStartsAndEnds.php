<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ItemAvailability;
use SignpostMarv\DaftObject\TypeUtilities;

trait AvailabilityAndStartsAndEnds
{
    use DaftObjectTrait;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ItemAvailability>
    */
    public function GetAvailability() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ItemAvailability>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availability',
            $this->RetrievePropertyValueFromData('availability'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ItemAvailability> $value
    */
    public function SetAvailability(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'availability',
            __METHOD__,
            $value,
            ItemAvailability::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetAvailabilityEnds() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availabilityEnds',
            $this->RetrievePropertyValueFromData('availabilityEnds'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetAvailabilityEnds(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'availabilityEnds',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetAvailabilityStarts() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availabilityStarts',
            $this->RetrievePropertyValueFromData('availabilityStarts'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetAvailabilityStarts(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'availabilityStarts',
            __METHOD__,
            $value,
            DateTime::class
        );
    }
}
