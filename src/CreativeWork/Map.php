<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\MapCategoryType;
use SignpostMarv\DaftObject\TypeUtilities;

class Map extends Base
{
    const SCHEMA_ORG_TYPE = 'Map';

    const PROPERTIES = [
        'mapType',
    ];

    /**
    * @return array<int, MapCategoryType>
    */
    public function GetMapType() : array
    {
        /**
        * @var array<int, MapCategoryType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'mapType',
            $this->RetrievePropertyValueFromData('mapType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MapCategoryType> $value
    */
    public function SetMapType(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'mapType',
            __METHOD__,
            $value,
            MapCategoryType::class
        );
    }
}
