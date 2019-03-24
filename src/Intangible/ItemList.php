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
* @property array<int, string|ListItem|Thing> $itemListElement
* @property array<int, string|Enumeration\ItemListOrderType> $itemListOrder
* @property array<int, int> $numberOfItems
*/
class ItemList extends Base
{
    const SCHEMA_ORG_TYPE = 'ItemList';

    const PROPERTIES = [
        'itemListElement',
        'itemListOrder',
        'numberOfItems',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'itemListElement' => [
            'string',
            ListItem::class,
            Thing::class,
        ],
        'itemListOrder' => [
            'string',
            Enumeration\ItemListOrderType::class,
        ],
        'numberOfItems' => [
            'integer',
        ],
    ];

    /**
    * @return array<int, string|ListItem|Thing>
    */
    public function GetItemListElement() : array
    {
        /**
        * @var array<int, string|ListItem|Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemListElement',
            $this->RetrievePropertyValueFromData('itemListElement'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|ListItem|Thing> $value
    */
    public function SetItemListElement(array $value) : void
    {
        $this->NudgePropertyValue(
            'itemListElement',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, string|Enumeration\ItemListOrderType>
    */
    public function GetItemListOrder() : array
    {
        /**
        * @var array<int, string|Enumeration\ItemListOrderType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemListOrder',
            $this->RetrievePropertyValueFromData('itemListOrder'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Enumeration\ItemListOrderType> $value
    */
    public function SetItemListOrder(array $value) : void
    {
        $this->NudgePropertyValue(
            'itemListOrder',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetNumberOfItems() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'numberOfItems',
            $this->RetrievePropertyValueFromData('numberOfItems'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetNumberOfItems(array $value) : void
    {
        $this->NudgePropertyValue(
            'numberOfItems',
            $value
        );
    }
}
