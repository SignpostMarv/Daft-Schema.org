<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitSupersededBy;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;

/**
* @property array<int, IntangibleClass|Enumeration|IntangibleProperty> $supersededBy
*/
class IntangibleClass extends Base
{
    use TraitSupersededBy;

    const SCHEMA_ORG_TYPE = 'Class';

    const PROPERTIES = [
        'supersededBy',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'supersededBy' => [
            IntangibleClass::class,
            Enumeration::class,
            IntangibleProperty::class,
        ],
    ];
}
