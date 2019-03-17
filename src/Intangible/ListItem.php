<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

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
    * @return array<int, int|string>
    */
    public function GetPosition() : array
    {
        /**
        * @var array<int, int|string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'position',
            $this->RetrievePropertyValueFromData('position'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|string> $value
    */
    public function SetPosition(array $value) : void
    {
        $this->NudgePropertyValue(
            'position',
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
