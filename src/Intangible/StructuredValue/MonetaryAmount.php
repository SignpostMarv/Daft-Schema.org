<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;

/**
* @property array<int, float|int> $maxValue
* @property array<int, float|int> $minValue
* @property array<int, bool|string|int|float|Base> $value
* @property array<int, string> $currency
* @property array<int, DateTime> $validFrom
* @property array<int, DateTime> $validThrough
*/
class MonetaryAmount extends Base
{
    use DaftObjectTraits\Currency;
    use DaftObjectTraits\HasMinMaxValue;
    use DaftObjectTraits\HasValidFromThrough;

    const SCHEMA_ORG_TYPE = 'MonetaryAmount';

    const PROPERTIES = [
        'currency',
        'maxValue',
        'minValue',
        'validFrom',
        'validThrough',
        'value',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'maxValue' => [
            'double',
            'integer',
        ],
        'minValue' => [
            'double',
            'integer',
        ],
        'value' => [
            'boolean',
            'string',
            'integer',
            'double',
            Base::class,
        ],
        'currency' => [
            'string',
        ],
        'validFrom' => [
            DateTime::class,
        ],
        'validThrough' => [
            DateTime::class,
        ],
    ];
}
