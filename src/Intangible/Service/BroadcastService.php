<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\BroadcastChannel;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\BroadcastFrequencySpecification;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service as Base;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Organization> $broadcastAffiliateOf
* @property array<int, string> $broadcastDisplayName
* @property array<int, string|BroadcastFrequencySpecification> $broadcastFrequency
* @property array<int, string> $broadcastTimezone
* @property array<int, Organization> $broadcaster
* @property array<int, BroadcastChannel> $hasBroadcastChannel
* @property array<int, BroadcastService> $parentService
* @property array<int, string> $videoFormat
*/
class BroadcastService extends Base
{
    const SCHEMA_ORG_TYPE = 'BroadcastService';

    const PROPERTIES = [
        'broadcastAffiliateOf',
        'broadcastDisplayName',
        'broadcastFrequency',
        'broadcastTimezone',
        'broadcaster',
        'hasBroadcastChannel',
        'parentService',
        'videoFormat',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'broadcastAffiliateOf' => [
            Organization::class,
        ],
        'broadcastDisplayName' => [
            'string',
        ],
        'broadcastFrequency' => [
            'string',
            BroadcastFrequencySpecification::class,
        ],
        'broadcastTimezone' => [
            'string',
        ],
        'broadcaster' => [
            Organization::class,
        ],
        'hasBroadcastChannel' => [
            BroadcastChannel::class,
        ],
        'parentService' => [
            BroadcastService::class,
        ],
        'videoFormat' => [
            'string',
        ],
    ];

    /**
    * @return array<int, Organization>
    */
    public function GetBroadcastAffiliateOf() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastAffiliateOf',
            $this->RetrievePropertyValueFromData('broadcastAffiliateOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetBroadcastAffiliateOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'broadcastAffiliateOf',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetBroadcastDisplayName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastDisplayName',
            $this->RetrievePropertyValueFromData('broadcastDisplayName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBroadcastDisplayName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'broadcastDisplayName',
            __METHOD__,
            $value
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
    public function GetBroadcastTimezone() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcastTimezone',
            $this->RetrievePropertyValueFromData('broadcastTimezone'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBroadcastTimezone(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'broadcastTimezone',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetBroadcaster() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broadcaster',
            $this->RetrievePropertyValueFromData('broadcaster'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetBroadcaster(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'broadcaster',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, BroadcastChannel>
    */
    public function GetHasBroadcastChannel() : array
    {
        /**
        * @var array<int, BroadcastChannel>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hasBroadcastChannel',
            $this->RetrievePropertyValueFromData('hasBroadcastChannel'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, BroadcastChannel> $value
    */
    public function SetHasBroadcastChannel(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'hasBroadcastChannel',
            __METHOD__,
            $value,
            BroadcastChannel::class
        );
    }

    /**
    * @return array<int, BroadcastService>
    */
    public function GetParentService() : array
    {
        /**
        * @var array<int, BroadcastService>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'parentService',
            $this->RetrievePropertyValueFromData('parentService'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, BroadcastService> $value
    */
    public function SetParentService(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'parentService',
            __METHOD__,
            $value,
            BroadcastService::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetVideoFormat() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'videoFormat',
            $this->RetrievePropertyValueFromData('videoFormat'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetVideoFormat(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'videoFormat',
            __METHOD__,
            $value
        );
    }
}
