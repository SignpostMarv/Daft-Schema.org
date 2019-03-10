<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class OwnershipInfo extends Base
{
    const SCHEMA_ORG_TYPE = 'OwnershipInfo';

    const PROPERTIES = [
        'acquiredFrom',
        'ownedFrom',
        'ownedThrough',
        'typeOfGood',
    ];

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetAcquiredFrom() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'acquiredFrom',
            $this->RetrievePropertyValueFromData('acquiredFrom'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetAcquiredFrom(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons('acquiredFrom', __METHOD__, $value);
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetOwnedFrom() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ownedFrom',
            $this->RetrievePropertyValueFromData('ownedFrom'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetOwnedFrom(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'ownedFrom',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetOwnedThrough() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ownedThrough',
            $this->RetrievePropertyValueFromData('ownedThrough'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetOwnedThrough(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'ownedThrough',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, Product|Service>
    */
    public function GetTypeOfGood() : array
    {
        /**
        * @var array<int, Product|Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'typeOfGood',
            $this->RetrievePropertyValueFromData('typeOfGood'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product|Service> $value
    */
    public function SetTypeOfGood(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'typeOfGood',
            __METHOD__,
            $value,
            Product::class,
            Service::class
        );
    }
}
