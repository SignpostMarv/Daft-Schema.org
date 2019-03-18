<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $broadcastChannelId
* @property array<int, string|BroadcastFrequencySpecification> $broadcastFrequency
* @property array<int, string> $broadcastServiceTier
* @property array<int, string> $genre
* @property array<int, Service\CableOrSatelliteService> $inBroadcastLineup
* @property array<int, Service\BroadcastService> $providesBroadcastService
*/
class BroadcastChannel extends Base
{
    use DaftObjectTraits\Genre;

    const SCHEMA_ORG_TYPE = 'BroadcastChannel';

    const PROPERTIES = [
        'broadcastChannelId',
        'broadcastFrequency',
        'broadcastServiceTier',
        'genre',
        'inBroadcastLineup',
        'providesBroadcastService',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'broadcastChannelId' => [
            'string',
        ],
        'broadcastFrequency' => [
            'string',
            BroadcastFrequencySpecification::class,
        ],
        'broadcastServiceTier' => [
            'string',
        ],
        'genre' => [
            'string',
        ],
        'inBroadcastLineup' => [
            Service\CableOrSatelliteService::class,
        ],
        'providesBroadcastService' => [
            Service\BroadcastService::class,
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetBroadcastChannelId() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastChannelId',
            $this->RetrievePropertyValueFromData('broadcastChannelId'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBroadcastChannelId(array $value) : void
    {
        $this->NudgePropertyValue(
            'broadcastChannelId',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|BroadcastFrequencySpecification>
    */
    public function GetBroadcastFrequency() : array
    {
        /**
        * @var array<int, string|BroadcastFrequencySpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastFrequency',
            $this->RetrievePropertyValueFromData('broadcastFrequency'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|BroadcastFrequencySpecification> $value
    */
    public function SetBroadcastFrequency(array $value) : void
    {
        $this->NudgePropertyValue(
            'broadcastFrequency',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetBroadcastServiceTier() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastServiceTier',
            $this->RetrievePropertyValueFromData('broadcastServiceTier'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBroadcastServiceTier(array $value) : void
    {
        $this->NudgePropertyValue(
            'broadcastServiceTier',
            $value,
            true
        );
    }

    /**
    * @return array<int, Service\CableOrSatelliteService>
    */
    public function GetInBroadcastLineup() : array
    {
        /**
        * @var array<int, Service\CableOrSatelliteService>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'inBroadcastLineup',
            $this->RetrievePropertyValueFromData('inBroadcastLineup'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Service\CableOrSatelliteService> $value
    */
    public function SetInBroadcastLineup(array $value) : void
    {
        $this->NudgePropertyValue(
            'inBroadcastLineup',
            $value
        );
    }

    /**
    * @return array<int, Service\BroadcastService>
    */
    public function GetProvidesBroadcastService() : array
    {
        /**
        * @var array<int, Service\BroadcastService>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'providesBroadcastService',
            $this->RetrievePropertyValueFromData('providesBroadcastService'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Service\BroadcastService> $value
    */
    public function SetProvidesBroadcastService(array $value) : void
    {
        $this->NudgePropertyValue(
            'providesBroadcastService',
            $value
        );
    }
}
