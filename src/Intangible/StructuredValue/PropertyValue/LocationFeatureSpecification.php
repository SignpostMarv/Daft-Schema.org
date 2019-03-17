<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue as Base;

/**
* @property array<int, OpeningHoursSpecification> $hoursAvailable
* @property array<int, DateTime> $validFrom
* @property array<int, DateTime> $validThrough
*/
class LocationFeatureSpecification extends Base
{
    use DaftObjectTraits\HasHoursAvailable;
    use DaftObjectTraits\HasValidFromThrough;

    const SCHEMA_ORG_TYPE = 'LocationFeatureSpecification';

    const PROPERTIES = [
        'hoursAvailable',
        'validFrom',
        'validThrough',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'hoursAvailable' => [
            OpeningHoursSpecification::class,
        ],
        'validFrom' => [
            DateTime::class,
        ],
        'validThrough' => [
            DateTime::class,
        ],
    ];
}
