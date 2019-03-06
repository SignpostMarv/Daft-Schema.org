<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

class DataDownload extends Base
{
    use DaftObjectTraits\MeasurementTechnique;

    const SCHEMA_ORG_TYPE = 'DataDownload';

    const PROPERTIES = [
        'measurementTechnique',
    ];
}
