<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

/**
* @property array<int, string|Intangible\ListItem|Thing> $itemListElement
* @property array<int, string|Intangible\Enumeration\ItemListOrderType> $itemListOrder
* @property array<int, int> $numberOfItems
*/
class ItemList extends Thing
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
            Intangible\ListItem::class,
            Thing::class,
        ],
        'itemListOrder' => [
            'string',
            Intangible\Enumeration\ItemListOrderType::class,
        ],
        'numberOfItems' => [
            'integer',
        ],
    ];

    /**
    * @return array<int, string|Intangible\ListItem|Thing>
    */
    public function GetItemListElement() : array
    {
        /**
        * @var array<int, string|Intangible\ListItem|Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemListElement',
            $this->RetrievePropertyValueFromData('itemListElement'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Intangible\ListItem|Thing> $value
    */
    public function SetItemListElement(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'itemListElement',
            __METHOD__,
            $value,
            Intangible\ListItem::class,
            Thing::class
        );
    }

    /**
    * @return array<int, string|Intangible\Enumeration\ItemListOrderType>
    */
    public function GetItemListOrder() : array
    {
        /**
        * @var array<int, string|Intangible\Enumeration\ItemListOrderType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemListOrder',
            $this->RetrievePropertyValueFromData('itemListOrder'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Intangible\Enumeration\ItemListOrderType> $value
    */
    public function SetItemListOrder(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'itemListOrder',
            __METHOD__,
            $value,
            Intangible\Enumeration\ItemListOrderType::class
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
        $this->NudgePropertyWithUniqueIntegers(
            'numberOfItems',
            __METHOD__,
            $value
        );
    }
}
