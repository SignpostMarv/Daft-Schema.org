<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string|Language> $availableLanguage
* @property array<int, Quantity\Duration> $processingTime
* @property array<int, Service> $providesService
* @property array<int, Place> $serviceLocation
* @property array<int, StructuredValue\ContactPoint> $servicePhone
* @property array<int, StructuredValue\ContactPoint\PostalAddress> $servicePostalAddress
* @property array<int, StructuredValue\ContactPoint> $serviceSmsNumber
* @property array<int, string> $serviceUrl
*/
class ServiceChannel extends Base
{
    use DaftObjectTraits\AvailableLanguage;

    const SCHEMA_ORG_TYPE = 'ServiceChannel';

    const PROPERTIES = [
        'availableLanguage',
        'processingTime',
        'providesService',
        'serviceLocation',
        'servicePhone',
        'servicePostalAddress',
        'serviceSmsNumber',
        'serviceUrl',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'availableLanguage' => [
            'string',
            Language::class,
        ],
        'processingTime' => [
            Quantity\Duration::class,
        ],
        'providesService' => [
            Service::class,
        ],
        'serviceLocation' => [
            Place::class,
        ],
        'servicePhone' => [
            StructuredValue\ContactPoint::class,
        ],
        'servicePostalAddress' => [
            StructuredValue\ContactPoint\PostalAddress::class,
        ],
        'serviceSmsNumber' => [
            StructuredValue\ContactPoint::class,
        ],
        'serviceUrl' => [
            'string',
        ],
    ];

    /**
    * @return array<int, Quantity\Duration>
    */
    public function GetProcessingTime() : array
    {
        /**
        * @var array<int, Quantity\Duration>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'processingTime',
            $this->RetrievePropertyValueFromData('processingTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Quantity\Duration> $value
    */
    public function SetProcessingTime(array $value) : void
    {
        $this->NudgePropertyValue(
            'processingTime',
            $value
        );
    }

    /**
    * @return array<int, Service>
    */
    public function GetProvidesService() : array
    {
        /**
        * @var array<int, Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'providesService',
            $this->RetrievePropertyValueFromData('providesService'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Service> $value
    */
    public function SetProvidesService(array $value) : void
    {
        $this->NudgePropertyValue(
            'providesService',
            $value
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetServiceLocation() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceLocation',
            $this->RetrievePropertyValueFromData('serviceLocation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetServiceLocation(array $value) : void
    {
        $this->NudgePropertyValue(
            'serviceLocation',
            $value
        );
    }

    /**
    * @return array<int, StructuredValue\ContactPoint>
    */
    public function GetServicePhone() : array
    {
        /**
        * @var array<int, StructuredValue\ContactPoint>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'servicePhone',
            $this->RetrievePropertyValueFromData('servicePhone'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, StructuredValue\ContactPoint> $value
    */
    public function SetServicePhone(array $value) : void
    {
        $this->NudgePropertyValue(
            'servicePhone',
            $value
        );
    }

    /**
    * @return array<int, StructuredValue\ContactPoint\PostalAddress>
    */
    public function GetServicePostalAddress() : array
    {
        /**
        * @var array<int, StructuredValue\ContactPoint\PostalAddress>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'servicePostalAddress',
            $this->RetrievePropertyValueFromData('servicePostalAddress'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, StructuredValue\ContactPoint\PostalAddress> $value
    */
    public function SetServicePostalAddress(array $value) : void
    {
        $this->NudgePropertyValue(
            'servicePostalAddress',
            $value
        );
    }

    /**
    * @return array<int, StructuredValue\ContactPoint>
    */
    public function GetServiceSmsNumber() : array
    {
        /**
        * @var array<int, StructuredValue\ContactPoint>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceSmsNumber',
            $this->RetrievePropertyValueFromData('serviceSmsNumber'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, StructuredValue\ContactPoint> $value
    */
    public function SetServiceSmsNumber(array $value) : void
    {
        $this->NudgePropertyValue(
            'serviceSmsNumber',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetServiceUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceUrl',
            $this->RetrievePropertyValueFromData('serviceUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetServiceUrl(array $value) : void
    {
        $this->NudgePropertyValue(
            'serviceUrl',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
