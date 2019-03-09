<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;

class QuantitativeValue extends Base
{
    use DaftObjectTraits\TraitAdditionalProperty;
    use DaftObjectTraits\TraitMinMaxValueUnit;
    use DaftObjectTraits\TraitValueReference;

    const SCHEMA_ORG_TYPE = 'QuantitativeValue';

    const PROPERTIES = [
        'additionalProperty',
        'maxValue',
        'minValue',
        'unitCode',
        'unitText',
        'value',
        'valueReference',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'additionalProperty', [
            PropertyValue::class,
        ],
        'maxValue' => [
            'integer',
            'double',
        ],
        'minValue' => [
            'integer',
            'double',
        ],
        'propertyID' => [
            'string',
        ],
        'unitCode' => [
            'string',
        ],
        'unitText' => [
            'string',
        ],
        'value' => [
            'boolean',
            'integer',
            'double',
            'string',
            Base::class,
        ],
        'valueReference' => [
            Enumeration::class,
            self::class,
            Enumeration\QualitativeValue::class,
            QuantitativeValue::class,
            Base::class,
        ],
    ];
}
