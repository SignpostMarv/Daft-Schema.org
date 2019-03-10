<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Dataset> $dataset
* @property array<int, string> $measurementTechnique
*/
class DataCatalog extends Base
{
    use DaftObjectTraits\MeasurementTechnique;

    const SCHEMA_ORG_TYPE = 'DataCatalog';

    const PROPERTIES = [
        'dataset',
        'measurementTechnique',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'dataset' => [
            Dataset::class,
        ],
        'measurementTechnique' => TypeUtilities::MULTI_TYPE_DICT__measurementTechnique,
    ];

    /**
    * @return array<int, Dataset>
    */
    public function GetDataset() : array
    {
        /**
        * @var array<int, Dataset>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dataset',
            $this->RetrievePropertyValueFromData('dataset'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Dataset> $value
    */
    public function SetDataset(array $value) : void
    {
        $this->NudgePropertyValue(
            'dataset',
            $value
        );
    }
}
