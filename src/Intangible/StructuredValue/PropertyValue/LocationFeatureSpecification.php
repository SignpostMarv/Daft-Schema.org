<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue as Base;

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
}
