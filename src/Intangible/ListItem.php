<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Thing> $item
* @property array<int, ListItem> $nextItem
* @property array<int, int|string> $position
* @property array<int, ListItem> $previousItem
*/
class ListItem extends Base
{
    use DaftObjectTraits\Item;
    use DaftObjectTraits\Position;

    const SCHEMA_ORG_TYPE = 'ListItem';

    const PROPERTIES = [
        'item',
        'nextItem',
        'position',
        'previousItem',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'item' => [
            Thing::class,
        ],
        'nextItem' => [
            ListItem::class,
        ],
        'position' => [
            'integer',
            'string',
        ],
        'previousItem' => [
            ListItem::class,
        ],
    ];

    /**
    * @return array<int, ListItem>
    */
    public function GetNextItem() : array
    {
        /**
        * @var array<int, ListItem>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'nextItem',
            $this->RetrievePropertyValueFromData('nextItem'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ListItem> $value
    */
    public function SetNextItem(array $value) : void
    {
        $this->NudgePropertyValue(
            'nextItem',
            $value
        );
    }

    /**
    * @return array<int, ListItem>
    */
    public function GetPreviousItem() : array
    {
        /**
        * @var array<int, ListItem>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'previousItem',
            $this->RetrievePropertyValueFromData('previousItem'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ListItem> $value
    */
    public function SetPreviousItem(array $value) : void
    {
        $this->NudgePropertyValue(
            'previousItem',
            $value
        );
    }
}
