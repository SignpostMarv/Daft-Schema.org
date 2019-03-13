<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, DataTypes\Date|DataTypes\DateTime> $dateCreated
* @property array<int, DataTypes\Date|DataTypes\DateTime> $dateDeleted
* @property array<int, DataTypes\Date|DataTypes\DateTime> $dateModified
* @property array<int, Thing> $item
*/
class DataFeedItem extends Base
{
    const SCHEMA_ORG_TYPE = 'DataFeedItem';

    const PROPERTIES = [
        'dateCreated',
        'dateDeleted',
        'dateModified',
        'item',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'dateCreated' => [
            DataTypes\Date::class,
            DataTypes\DateTime::class,
        ],
        'dateDeleted' => [
            DataTypes\Date::class,
            DataTypes\DateTime::class,
        ],
        'dateModified' => [
            DataTypes\Date::class,
            DataTypes\DateTime::class,
        ],
        'item' => [
            Thing::class,
        ],
    ];

    /**
    * @return array<int, DataTypes\Date|DataTypes\DateTime>
    */
    public function GetDateCreated() : array
    {
        /**
        * @var array<int, DataTypes\Date|DataTypes\DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dateCreated',
            $this->RetrievePropertyValueFromData('dateCreated'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date|DataTypes\DateTime> $value
    */
    public function SetDateCreated(array $value) : void
    {
        $this->NudgePropertyValue(
            'dateCreated',
            $value
        );
    }

    /**
    * @return array<int, DataTypes\Date|DataTypes\DateTime>
    */
    public function GetDateDeleted() : array
    {
        /**
        * @var array<int, DataTypes\Date|DataTypes\DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dateDeleted',
            $this->RetrievePropertyValueFromData('dateDeleted'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date|DataTypes\DateTime> $value
    */
    public function SetDateDeleted(array $value) : void
    {
        $this->NudgePropertyValue(
            'dateDeleted',
            $value
        );
    }

    /**
    * @return array<int, DataTypes\Date|DataTypes\DateTime>
    */
    public function GetDateModified() : array
    {
        /**
        * @var array<int, DataTypes\Date|DataTypes\DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dateModified',
            $this->RetrievePropertyValueFromData('dateModified'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date|DataTypes\DateTime> $value
    */
    public function SetDateModified(array $value) : void
    {
        $this->NudgePropertyValue(
            'dateModified',
            $value
        );
    }

    /**
    * @return array<int, Thing>
    */
    public function GetItem() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'item',
            $this->RetrievePropertyValueFromData('item'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetItem(array $value) : void
    {
        $this->NudgePropertyValue(
            'item',
            $value
        );
    }
}
