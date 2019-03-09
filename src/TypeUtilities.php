<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\TypeUtilities as Base;

class TypeUtilities extends Base
{
    const MULTI_TYPE_DICT__additionalProperty = [
        Intangible\StructuredValue\PropertyValue::class,
    ];

    const MULTI_TYPE_DICT__valueReference = [
        Intangible\Enumeration\QualitativeValue::class,
        Intangible\Enumeration::class,
        Intangible\StructuredValue\PropertyValue::class,
        Intangible\StructuredValue\QuantitativeValue::class,
        Intangible\StructuredValue::class,
    ];
}
