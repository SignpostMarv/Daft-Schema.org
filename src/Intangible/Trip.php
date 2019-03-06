<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\TypeUtilities;

class Trip extends Base
{
    use DaftObjectTraits\HasHasPart;
    use DaftObjectTraits\HasOffers;
    use DaftObjectTraits\HasProvider;

    const SCHEMA_ORG_TYPE = 'Trip';

    const PROPERTIES = [
        'arrivalTime',
        'departureTime',
        'hasPart',
        'isPartOf',
        'itinerary',
        'offers',
        'provider',
    ];

    /**
    * @return array<int, DateTime>
    */
    public function GetArrivalTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'arrivalTime',
            $this->RetrievePropertyValueFromData('arrivalTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetArrivalTime(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'arrivalTime',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetDepartureTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'departureTime',
            $this->RetrievePropertyValueFromData('departureTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetDepartureTime(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'departureTime',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, ItemList>
    */
    public function GetItinerary() : array
    {
        /**
        * @var array<int, ItemList>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itinerary',
            $this->RetrievePropertyValueFromData('itinerary'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ItemList> $value
    */
    public function SetItinerary(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'itinerary',
            __METHOD__,
            $value,
            ItemList::class,
            Place::class
        );
    }
}
