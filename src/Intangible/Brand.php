<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;

/**
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, ImageObject> $logo
* @property array<int, Review> $review
*/
class Brand extends Base
{
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasLogo;
    use DaftObjectTraits\HasReview;

    const SCHEMA_ORG_TYPE = 'Brand';

    const PROPERTIES = [
        'aggregateRating',
        'logo',
        'review',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'logo' => [
            ImageObject::class,
        ],
        'review' => [
            Review::class,
        ],
    ];
}
