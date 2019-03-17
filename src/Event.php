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
    use DaftObjectTraits\About;
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
        $out = $this->ExpectRetrievedValueIsArray(
            'attendee'
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetAttendee(array $value) : void
    {
        $this->NudgePropertyValue('attendee', $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetContributor() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'contributor'
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetContributor(array $value) : void
    {
        $this->NudgePropertyValue('contributor', $value);
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetDoorTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'doorTime'
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetDoorTime(array $value) : void
    {
        $this->NudgePropertyValue(
            'doorTime',
            $value
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
        $out = $this->ExpectRetrievedValueIsArray(
            'endDate'
        );

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetEndDate(array $value) : void
    {
        $this->NudgePropertyValue('endDate', $value);
    }

    /**
    * @return array<int, EventStatusType>
    */
    public function GetEventStatus() : array
    {
        /**
        * @var array<int, EventStatusType>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'eventStatus'
        );

        return $out;
    }

    /**
    * @param array<int, EventStatusType> $value
    */
    public function SetEventStatus(array $value) : void
    {
        $this->NudgePropertyValue(
            'eventStatus',
            $value
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
        $out = $this->ExpectRetrievedValueIsArray(
            'maximumAttendeeCapacity'
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetMaximumAttendeeCapacity(array $value) : void
    {
        $this->NudgePropertyValue('maximumAttendeeCapacity', $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetOrganizer() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'organizer'
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetOrganizer(array $value) : void
    {
        $this->NudgePropertyValue('organizer', $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetPerformer() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'performer'
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetPerformer(array $value) : void
    {
        $this->NudgePropertyValue('performer', $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetPreviousStartDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'previousStartDate'
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetPreviousStartDate(array $value) : void
    {
        $this->NudgePropertyValue('previousStartDate', $value);
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetRecordedIn() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'recordedIn'
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetRecordedIn(array $value) : void
    {
        $this->NudgePropertyValue(
            'recordedIn',
            $value
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
        $out = $this->ExpectRetrievedValueIsArray(
            'remainingAttendeeCapacity'
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetRemainingAttendeeCapacity(array $value) : void
    {
        $this->NudgePropertyValue('remainingAttendeeCapacity', $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetStartDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'startDate'
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetStartDate(array $value) : void
    {
        $this->NudgePropertyValue('startDate', $value);
    }

    /**
    * @return array<int, Event>
    */
    public function GetSubEvent() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'subEvent'
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetSubEvent(array $value) : void
    {
        $this->NudgePropertyValue('subEvent', $value);
    }

    /**
    * @return array<int, Event>
    */
    public function GetSuperEvent() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'superEvent'
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetSuperEvent(array $value) : void
    {
        $this->NudgePropertyValue('superEvent', $value);
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetWorkFeatured() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'workFeatured'
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetWorkFeatured(array $value) : void
    {
        $this->NudgePropertyValue(
            'workFeatured',
            $value
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
        $out = $this->ExpectRetrievedValueIsArray(
            'workPerformed'
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetWorkPerformed(array $value) : void
    {
        $this->NudgePropertyValue(
            'workPerformed',
            $value
        );
    }
}
