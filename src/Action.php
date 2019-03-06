<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\EntryPoint;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ActionStatusType;
use SignpostMarv\DaftObject\TypeUtilities;

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

    /**
    * @return array<int, ActionStatusType>
    */
    public function GetActionStatus() : array
    {
        /**
        * @var array<int, ActionStatusType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'actionStatus',
            $this->RetrievePropertyValueFromData('actionStatus'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ActionStatusType> $value
    */
    public function SetActionStatus(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'actionStatus',
            __METHOD__,
            $value,
            ActionStatusType::class
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetAgent() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'agent',
            $this->RetrievePropertyValueFromData('agent'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetAgent(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'agent',
            __METHOD__,
            $value,
            Organization::class,
            Person::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetEndTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'endTime',
            $this->RetrievePropertyValueFromData('endTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetEndTime(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'endTime',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, Thing>
    */
    public function GetError() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'error',
            $this->RetrievePropertyValueFromData('error'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetError(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'error',
            __METHOD__,
            $value,
            Thing::class
        );
    }

    /**
    * @return array<int, Thing>
    */
    public function GetInstrument() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'instrument',
            $this->RetrievePropertyValueFromData('instrument'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetInstrument(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'instrument',
            __METHOD__,
            $value,
            Thing::class
        );
    }

    /**
    * @return array<int, Thing>
    */
    public function GetObject() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'object',
            $this->RetrievePropertyValueFromData('object'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetObject(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'object',
            __METHOD__,
            $value,
            Thing::class
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetParticipant() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'participant',
            $this->RetrievePropertyValueFromData('participant'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetParticipant(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'participant',
            __METHOD__,
            $value,
            Organization::class,
            Person::class
        );
    }

    /**
    * @return array<int, Thing>
    */
    public function GetResult() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'result',
            $this->RetrievePropertyValueFromData('result'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetResult(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'result',
            __METHOD__,
            $value,
            Thing::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetStartTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'startTime',
            $this->RetrievePropertyValueFromData('startTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetStartTime(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'startTime',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, EntryPoint>
    */
    public function GetTarget() : array
    {
        /**
        * @var array<int, EntryPoint>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'target',
            $this->RetrievePropertyValueFromData('target'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, EntryPoint> $value
    */
    public function SetTarget(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'target',
            __METHOD__,
            $value,
            EntryPoint::class
        );
    }
}
