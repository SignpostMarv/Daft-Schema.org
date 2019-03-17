<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Organization|Person> $acquiredFrom
* @property array<int, DateTime> $ownedFrom
* @property array<int, DateTime> $ownedThrough
* @property array<int, Product|Service> $typeOfGood
*/
class OwnershipInfo extends Base
{
    const SCHEMA_ORG_TYPE = 'OwnershipInfo';

    const PROPERTIES = [
        'acquiredFrom',
        'ownedFrom',
        'ownedThrough',
        'typeOfGood',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'acquiredFrom' => [
            Organization::class,
            Person::class,
        ],
        'ownedFrom' => [
            DateTime::class,
        ],
        'ownedThrough' => [
            DateTime::class,
        ],
        'typeOfGood' => [
            Product::class,
            Service::class,
        ],
    ];

    /**
    * @return array<int, Organization|Person>
    */
    public function GetAcquiredFrom() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'acquiredFrom',
            $this->RetrievePropertyValueFromData('acquiredFrom'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetAcquiredFrom(array $value) : void
    {
        $this->NudgePropertyValue('acquiredFrom', $value);
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
        $this->NudgePropertyValue(
            'ownedFrom',
            $value
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
        $this->NudgePropertyValue(
            'ownedThrough',
            $value
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
        $this->NudgePropertyValue(
            'typeOfGood',
            $value
        );
    }
}
