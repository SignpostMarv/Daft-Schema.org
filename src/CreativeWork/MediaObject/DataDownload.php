<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $measurementTechnique
*/
class DataDownload extends Base
{
    use DaftObjectTraits\MeasurementTechnique;

    const SCHEMA_ORG_TYPE = 'DataDownload';

    const PROPERTIES = [
        'measurementTechnique',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'measurementTechnique' => TypeUtilities::MULTI_TYPE_DICT__measurementTechnique,
    ];
}
