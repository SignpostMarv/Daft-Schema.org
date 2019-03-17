<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue as Base;

/**
* @property array<int, string> $currency
*/
class MonetaryAmountDistribution extends Base
{
    use DaftObjectTraits\Currency;

    const SCHEMA_ORG_TYPE = 'MonetaryAmountDistribution';

    const PROPERTIES = [
        'currency',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'currency' => [
            'string',
        ],
    ];
}
