<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

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

    /**
    * @return array<int, DataTypes\Duration>
    */
    public function GetProcessingTime() : array
    {
        /**
        * @var array<int, DataTypes\Duration>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'processingTime',
            $this->RetrievePropertyValueFromData('processingTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Duration> $value
    */
    public function SetProcessingTime(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'processingTime',
            __METHOD__,
            $value,
            DataTypes\Duration::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'providesService',
            __METHOD__,
            $value,
            Service::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'serviceLocation',
            __METHOD__,
            $value,
            Place::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'servicePhone',
            __METHOD__,
            $value,
            StructuredValue\ContactPoint::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'servicePostalAddress',
            __METHOD__,
            $value,
            StructuredValue\ContactPoint\PostalAddress::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'serviceSmsNumber',
            __METHOD__,
            $value,
            StructuredValue\ContactPoint::class
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'serviceUrl',
            __METHOD__,
            $value
        );
    }
}
