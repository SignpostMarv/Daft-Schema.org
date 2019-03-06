<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

class PropertyValue extends StructuredValue
{
    use DaftObjectTraits\MeasurementTechnique;
    use DaftObjectTraits\TraitValueReference;

    const SCHEMA_ORG_TYPE = 'PropertyValue';

    const PROPERTIES = [
        'maxValue',
        'measurementTechnique',
        'minValue',
        'propertyID',
        'unitCode',
        'unitText',
        'value',
        'valueReference',
    ];
}
