<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
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
}
