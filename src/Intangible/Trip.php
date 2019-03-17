<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Offer;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, DateTime> $arrivalTime
* @property array<int, DateTime> $departureTime
* @property array<int, CreativeWork|Trip> $hasPart
* @property array<int, CreativeWork|Trip> $isPartOf
* @property array<int, ItemList> $itinerary
* @property array<int, Offer> $offers
* @property array<int, Organization|Person> $provider
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'arrivalTime' => [
            DateTime::class,
        ],
        'departureTime' => [
            DateTime::class,
        ],
        'hasPart' => [
            CreativeWork::class,
            Trip::class,
        ],
        'isPartOf' => [
            CreativeWork::class,
            Trip::class,
        ],
        'itinerary' => [
            ItemList::class,
        ],
        'offers' => [
            Offer::class,
        ],
        'provider' => [
            Organization::class,
            Person::class,
        ],
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
        $this->NudgePropertyValue(
            'arrivalTime',
            $value
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
        $this->NudgePropertyValue(
            'departureTime',
            $value
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
        $this->NudgePropertyValue(
            'itinerary',
            $value
        );
    }
}
