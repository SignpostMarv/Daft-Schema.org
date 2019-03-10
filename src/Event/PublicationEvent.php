<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Event;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Event as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service\BroadcastService;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class PublicationEvent extends Base
{
    use DaftObjectTraits\HasIsAccessibleForFree;

    const SCHEMA_ORG_TYPE = 'PublicationEvent';

    const PROPERTIES = [
        'isAccessibleForFree',
        'publishedBy',
        'publishedOn',
    ];

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetPublishedBy() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publishedBy',
            $this->RetrievePropertyValueFromData('publishedBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetPublishedBy(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('publishedBy', __METHOD__, $value);
    }

    /**
    * @return array<int, BroadcastService>
    */
    public function GetPublishedOn() : array
    {
        /**
        * @var array<int, BroadcastService>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publishedOn',
            $this->RetrievePropertyValueFromData('publishedOn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, BroadcastService> $value
    */
    public function SetPublishedOn(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'publishedOn',
            __METHOD__,
            $value,
            BroadcastService::class
        );
    }
}
