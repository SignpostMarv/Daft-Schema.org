<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
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
    use DaftObjectTraits\DateCreatedModified;
    use DaftObjectTraits\Item;

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
}
