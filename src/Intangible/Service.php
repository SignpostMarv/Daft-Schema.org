<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\TypeUtilities;

class Service extends Base
{
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasAreaServed;
    use DaftObjectTraits\HasAudience;
    use DaftObjectTraits\HasAward;
    use DaftObjectTraits\HasBrand;
    use DaftObjectTraits\HasCategory;
    use DaftObjectTraits\HasHasOfferCatalog;
    use DaftObjectTraits\HasHoursAvailable;
    use DaftObjectTraits\HasLogo;
    use DaftObjectTraits\HasOffers;
    use DaftObjectTraits\HasProvider;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\IsRelatedOrSimilarTo;

    const SCHEMA_ORG_TYPE = 'Service';

    const PROPERTIES = [
        'aggregateRating',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'broker',
        'category',
        'hasOfferCatalog',
        'hoursAvailable',
        'isRelatedTo',
        'isSimilarTo',
        'logo',
        'offers',
        'provider',
        'providerMobility',
        'review',
        'serviceOutput',
        'serviceType',
        'termsOfService',
    ];

    /**
    * @return array<int, ServiceChannel>
    */
    public function GetAvailableChannel() : array
    {
        /**
        * @var array<int, ServiceChannel>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableChannel',
            $this->RetrievePropertyValueFromData('availableChannel'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ServiceChannel> $value
    */
    public function SetAvailableChannel(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'availableChannel',
            __METHOD__,
            $value,
            ServiceChannel::class
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetBroker() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'broker',
            $this->RetrievePropertyValueFromData('broker'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetBroker(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons(
            'broker',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetProviderMobility() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'providerMobility',
            $this->RetrievePropertyValueFromData('providerMobility'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetProviderMobility(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'providerMobility',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetServiceOutput() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceOutput',
            $this->RetrievePropertyValueFromData('serviceOutput'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetServiceOutput(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'serviceOutput',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetServiceText() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serviceText',
            $this->RetrievePropertyValueFromData('serviceText'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetServiceText(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'serviceText',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetTermsOfService() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'termsOfService',
            $this->RetrievePropertyValueFromData('termsOfService'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTermsOfService(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'termsOfService',
            __METHOD__,
            $value
        );
    }
}
