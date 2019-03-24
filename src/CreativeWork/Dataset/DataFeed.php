<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Dataset;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Dataset as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\DataFeedItem;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string|DataFeedItem|Thing> $dataFeedElement
*/
class DataFeed extends Base
{
    const SCHEMA_ORG_TYPE = 'DataFeed';

    const PROPERTIES = [
        'dataFeedElement',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'dataFeedElement' => [
            'string',
            DataFeedItem::class,
            Thing::class,
        ],
    ];

    /**
    * @return array<int, string|DataFeedItem|Thing>
    */
    public function GetDataFeedElement() : array
    {
        /**
        * @var array<int, string|DataFeedItem|Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dataFeedElement',
            $this->RetrievePropertyValueFromData('dataFeedElement'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|DataFeedItem|Thing> $value
    */
    public function SetDataFeedElement(array $value) : void
    {
        $this->NudgePropertyValue(
            'dataFeedElement',
            $value,
            self::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
