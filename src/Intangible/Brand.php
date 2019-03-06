<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;

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
}
