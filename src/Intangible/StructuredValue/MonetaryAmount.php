<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;

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
}
