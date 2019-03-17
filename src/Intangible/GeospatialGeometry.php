<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, GeospatialGeometry|Place> $geospatiallyContains
* @property array<int, GeospatialGeometry|Place> $geospatiallyCoveredBy
* @property array<int, GeospatialGeometry|Place> $geospatiallyCovers
* @property array<int, GeospatialGeometry|Place> $geospatiallyCrosses
* @property array<int, GeospatialGeometry|Place> $geospatiallyDisjoint
* @property array<int, GeospatialGeometry|Place> $geospatiallyEquals
* @property array<int, GeospatialGeometry|Place> $geospatiallyIntersects
* @property array<int, GeospatialGeometry|Place> $geospatiallyOverlaps
* @property array<int, GeospatialGeometry|Place> $geospatiallyTouches
* @property array<int, GeospatialGeometry|Place> $geospatiallyWithin
*/
class GeospatialGeometry extends Base
{
    use DaftObjectTraits\HasGeospatialGeometry;

    const SCHEMA_ORG_TYPE = 'GeospatialGeometry';

    const PROPERTIES = [
        'geospatiallyContains',
        'geospatiallyCoveredBy',
        'geospatiallyCovers',
        'geospatiallyCrosses',
        'geospatiallyDisjoint',
        'geospatiallyEquals',
        'geospatiallyIntersects',
        'geospatiallyOverlaps',
        'geospatiallyTouches',
        'geospatiallyWithin',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'geospatiallyContains' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyCoveredBy' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyCovers' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyCrosses' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyDisjoint' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyEquals' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyIntersects' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyOverlaps' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyTouches' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyWithin' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
    ];
}
