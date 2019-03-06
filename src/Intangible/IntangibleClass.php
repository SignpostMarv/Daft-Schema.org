<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitSupersededBy;
use SignpostMarv\DaftObject\SchemaOrg\Intangible;

class IntangibleClass extends Intangible
{
    use TraitSupersededBy;

    const SCHEMA_ORG_TYPE = 'Class';

    const PROPERTIES = [
        'supersededBy',
    ];
}
