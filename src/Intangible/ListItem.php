<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class ListItem extends Base
{
    const SCHEMA_ORG_TYPE = 'ListItem';

    const PROPERTIES = [
        'item',
        'nextItem',
        'position',
        'previousItem',
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'item',
            __METHOD__,
            $value,
            Thing::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'nextItem',
            __METHOD__,
            $value,
            ListItem::class
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
        $this->NudgePropertWithUniqueIntegersOrTrimmedStrings(
            'position',
            __METHOD__,
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'previousItem',
            __METHOD__,
            $value,
            ListItem::class
        );
    }
}
