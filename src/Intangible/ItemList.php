<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class ItemList extends Base
{
    const SCHEMA_ORG_TYPE = 'ItemList';

    const PROPERTIES = [
        'itemListElement',
        'itemListOrder',
        'numberOfItems',
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
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'itemListElement',
            __METHOD__,
            $value,
            ListItem::class,
            Thing::class
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
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'itemListOrder',
            __METHOD__,
            $value,
            Enumeration\ItemListOrderType::class
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
