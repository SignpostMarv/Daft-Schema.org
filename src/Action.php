<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\EntryPoint;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ActionStatusType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;

/**
* @property array<int, ActionStatusType> $actionStatus
* @property array<int, Organization|Person> $agent
* @property array<int, DateTime> $endTime
* @property array<int, Thing> $error
* @property array<int, Thing> $instrument
* @property array<int, string|Place|PostalAddress> $location
* @property array<int, Thing> $object
* @property array<int, Organization|Person> $participant
* @property array<int, Thing> $result
* @property array<int, DateTime> $startTime
* @property array<int, EntryPoint> $target
*/
class Action extends Thing
{
    use DaftObjectTraits\HasLocation;

    const SCHEMA_ORG_TYPE = 'Action';

    const PROPERTIES = [
        'actionStatus',
        'agent',
        'endTime',
        'error',
        'instrument',
        'location',
        'object',
        'participant',
        'result',
        'startTime',
        'target',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'actionStatus' => [
            ActionStatusType::class,
        ],
        'agent' => [
            Organization::class,
            Person::class,
        ],
        'endTime' => [
            DateTime::class,
        ],
        'error' => [
            Thing::class,
        ],
        'instrument' => [
            Thing::class,
        ],
        'location' => [
            'string',
            Place::class,
            PostalAddress::class,
        ],
        'object' => [
            Thing::class,
        ],
        'participant' => [
            Organization::class,
            Person::class,
        ],
        'result' => [
            Thing::class,
        ],
        'startTime' => [
            DateTime::class,
        ],
        'target' => [
            EntryPoint::class,
        ],
    ];

    /**
    * @return array<int, ActionStatusType>
    */
    public function GetActionStatus() : array
    {
        /**
        * @var array<int, ActionStatusType>
        */
        $out = $this->ExpectRetrievedValueIsArray('actionStatus');

        return $out;
    }

    /**
    * @param array<int, ActionStatusType> $value
    */
    public function SetActionStatus(array $value) : void
    {
        $this->NudgePropertyValue('actionStatus', $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetAgent() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = $this->ExpectRetrievedValueIsArray('agent');

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetAgent(array $value) : void
    {
        $this->NudgePropertyValue('agent', $value);
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetEndTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = $this->ExpectRetrievedValueIsArray('endTime');

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetEndTime(array $value) : void
    {
        $this->NudgePropertyValue('endTime', $value);
    }

    /**
    * @return array<int, Thing>
    */
    public function GetError() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = $this->ExpectRetrievedValueIsArray('error');

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetError(array $value) : void
    {
        $this->NudgePropertyValue('error', $value);
    }

    /**
    * @return array<int, Thing>
    */
    public function GetInstrument() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = $this->ExpectRetrievedValueIsArray('instrument');

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetInstrument(array $value) : void
    {
        $this->NudgePropertyValue('instrument', $value);
    }

    /**
    * @return array<int, Thing>
    */
    public function GetObject() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = $this->ExpectRetrievedValueIsArray('object');

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetObject(array $value) : void
    {
        $this->NudgePropertyValue('object', $value);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetParticipant() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = $this->ExpectRetrievedValueIsArray('participant');

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetParticipant(array $value) : void
    {
        $this->NudgePropertyValue('participant', $value);
    }

    /**
    * @return array<int, Thing>
    */
    public function GetResult() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = $this->ExpectRetrievedValueIsArray('result');

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetResult(array $value) : void
    {
        $this->NudgePropertyValue('result', $value);
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetStartTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = $this->ExpectRetrievedValueIsArray('startTime');

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetStartTime(array $value) : void
    {
        $this->NudgePropertyValue('startTime', $value);
    }

    /**
    * @return array<int, EntryPoint>
    */
    public function GetTarget() : array
    {
        /**
        * @var array<int, EntryPoint>
        */
        $out = $this->ExpectRetrievedValueIsArray('target');

        return $out;
    }

    /**
    * @param array<int, EntryPoint> $value
    */
    public function SetTarget(array $value) : void
    {
        $this->NudgePropertyValue('target', $value);
    }
}
