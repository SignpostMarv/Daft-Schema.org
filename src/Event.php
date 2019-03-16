<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\EventStatusType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Language;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Duration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;

/**
* @property array<int, Thing> $about
* @property array<int, Person> $actor
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, Organization|Person> $attendee
* @property array<int, Audience> $audience
* @property array<int, Organization|Person> $composer
* @property array<int, Organization|Person> $contributor
* @property array<int, Person> $director
* @property array<int, DateTime> $doorTime
* @property array<int, Duration> $duration
* @property array<int, Date|DateTime> $endDate
* @property array<int, EventStatusType> $eventStatus
* @property array<int, Organization|Person> $funder
* @property array<int, string|Language> $inLanguage
* @property array<int, bool> $isAccessibleForFree
* @property array<int, string|Place|PostalAddress> $location
* @property array<int, Organization|Person> $maximumAttendeeCapacity
* @property array<int, Offer> $offers
* @property array<int, Organization|Person> $organizer
* @property array<int, Organization|Person> $performer
* @property array<int, Date> $previousStartDate
* @property array<int, CreativeWork> $recordedIn
* @property array<int, int> $remainingAttendeeCapacity
* @property array<int, Review> $review
* @property array<int, Organization|Person> $sponsor
* @property array<int, Date> $startDate
* @property array<int, Event> $subEvent
* @property array<int, Event> $superEvent
* @property array<int, Organization|Person> $translator
* @property array<int, string> $typicalAgeRange
* @property array<int, CreativeWork> $workFeatured
* @property array<int, CreativeWork> $workPerformed
*/
class Event extends Thing
{
    use DaftObjectTraits\HasAboutThing;
    use DaftObjectTraits\HasActor;
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasAudience;
    use DaftObjectTraits\Composer;
    use DaftObjectTraits\HasDirector;
    use DaftObjectTraits\Duration;
    use DaftObjectTraits\HasFunder;
    use DaftObjectTraits\HasInLanguage;
    use DaftObjectTraits\HasIsAccessibleForFree;
    use DaftObjectTraits\HasLocation;
    use DaftObjectTraits\HasOffers;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\HasSponsors;
    use DaftObjectTraits\HasTranslators;
    use DaftObjectTraits\HasTypicalAgeRanges;

    const SCHEMA_ORG_TYPE = 'Event';

    const PROPERTIES = [
        'about',
        'actor',
        'aggregateRating',
        'attendee',
        'audience',
        'composer',
        'contributor',
        'director',
        'doorTime',
        'duration',
        'endDate',
        'eventStatus',
        'funder',
        'inLanguage',
        'isAccessibleForFree',
        'location',
        'maximumAttendeeCapacity',
        'offers',
        'organizer',
        'performer',
        'previousStartDate',
        'recordedIn',
        'remainingAttendeeCapacity',
        'review',
        'sponsor',
        'startDate',
        'subEvent',
        'superEvent',
        'translator',
        'typicalAgeRange',
        'workFeatured',
        'workPerformed',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'about' => [
            Thing::class,
        ],
        'actor' => [
            Person::class,
        ],
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'attendee' => [
            Organization::class,
            Person::class,
        ],
        'audience' => [
            Audience::class,
        ],
        'composer' => [
            Organization::class,
            Person::class,
        ],
        'contributor' => [
            Organization::class,
            Person::class,
        ],
        'director' => [
            Person::class,
        ],
        'doorTime' => [
            DateTime::class,
        ],
        'duration' => [
            Duration::class,
        ],
        'endDate' => [
            Date::class,
            DateTime::class,
        ],
        'eventStatus' => [
            EventStatusType::class,
        ],
        'funder' => [
            Organization::class,
            Person::class,
        ],
        'inLanguage' => [
            'string',
            Language::class,
        ],
        'isAccessibleForFree' => [
            'boolean',
        ],
        'location' => [
            'string',
            Place::class,
            PostalAddress::class,
        ],
        'maximumAttendeeCapacity' => [
            Organization::class,
            Person::class,
        ],
        'offers' => [
            Offer::class,
        ],
        'organizer' => [
            Organization::class,
            Person::class,
        ],
        'performer' => [
            Organization::class,
            Person::class,
        ],
        'previousStartDate' => [
            Date::class,
        ],
        'recordedIn' => [
            CreativeWork::class,
        ],
        'remainingAttendeeCapacity' => [
            'integer',
        ],
        'review' => [
            Review::class,
        ],
        'sponsor' => [
            Organization::class,
            Person::class,
        ],
        'startDate' => [
            Date::class,
        ],
        'subEvent' => [
            Event::class,
        ],
        'superEvent' => [
            Event::class,
        ],
        'translator' => [
            Organization::class,
            Person::class,
        ],
        'typicalAgeRange' => [
            'string',
        ],
        'workFeatured' => [
            CreativeWork::class,
        ],
        'workPerformed' => [
            CreativeWork::class,
        ],
    ];

    /**
    * @return array<int, Organization|Person>
    */
    public function GetAttendee() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'attendee',
            $this->RetrievePropertyValueFromData('attendee'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetAttendee(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('attendee', __METHOD__, $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetContributor() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contributor',
            $this->RetrievePropertyValueFromData('contributor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetContributor(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('contributor', __METHOD__, $value);
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetDoorTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'doorTime',
            $this->RetrievePropertyValueFromData('doorTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetDoorTime(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'doorTime',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, Date|DateTime>
    */
    public function GetEndDate() : array
    {
        /**
        * @var array<int, Date|DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'endDate',
            $this->RetrievePropertyValueFromData('endDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetEndDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueDatesOrDateTimes('endDate', __METHOD__, $value);
    }

    /**
    * @return array<int, EventStatusType>
    */
    public function GetEventStatus() : array
    {
        /**
        * @var array<int, EventStatusType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eventStatus',
            $this->RetrievePropertyValueFromData('eventStatus'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, EventStatusType> $value
    */
    public function SetEventStatus(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eventStatus',
            __METHOD__,
            $value,
            EventStatusType::class
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetMaximumAttendeeCapacity() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'maximumAttendeeCapacity',
            $this->RetrievePropertyValueFromData('maximumAttendeeCapacity'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetMaximumAttendeeCapacity(array $value) : void
    {
        $this->NudgePropertyWithUniqueValues('maximumAttendeeCapacity', __METHOD__, $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetOrganizer() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'organizer',
            $this->RetrievePropertyValueFromData('organizer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetOrganizer(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('organizer', __METHOD__, $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetPerformer() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'performer',
            $this->RetrievePropertyValueFromData('performer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetPerformer(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('performer', __METHOD__, $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetPreviousStartDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'previousStartDate',
            $this->RetrievePropertyValueFromData('previousStartDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetPreviousStartDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueDates('previousStartDate', __METHOD__, $value);
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetRecordedIn() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'recordedIn',
            $this->RetrievePropertyValueFromData('recordedIn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetRecordedIn(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'recordedIn',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetRemainingAttendeeCapacity() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'remainingAttendeeCapacity',
            $this->RetrievePropertyValueFromData('remainingAttendeeCapacity'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetRemainingAttendeeCapacity(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers('remainingAttendeeCapacity', __METHOD__, $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetStartDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'startDate',
            $this->RetrievePropertyValueFromData('startDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetStartDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueDatesOrDateTimes('startDate', __METHOD__, $value);
    }

    /**
    * @return array<int, Event>
    */
    public function GetSubEvent() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'subEvent',
            $this->RetrievePropertyValueFromData('subEvent'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetSubEvent(array $value) : void
    {
        $this->NudgePropertyWithUniqueEvents('subEvent', __METHOD__, $value);
    }

    /**
    * @return array<int, Event>
    */
    public function GetSuperEvent() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'superEvent',
            $this->RetrievePropertyValueFromData('superEvent'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetSuperEvent(array $value) : void
    {
        $this->NudgePropertyWithUniqueEvents('superEvent', __METHOD__, $value);
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetWorkFeatured() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'workFeatured',
            $this->RetrievePropertyValueFromData('workFeatured'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetWorkFeatured(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'workFeatured',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetWorkPerformed() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'workPerformed',
            $this->RetrievePropertyValueFromData('workPerformed'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetWorkPerformed(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'workPerformed',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }
}
