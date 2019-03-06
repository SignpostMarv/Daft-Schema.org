<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitSupersededBy;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;

class Enumeration extends Base
{
    use TraitSupersededBy;

    const SCHEMA_ORG_TYPE = 'Enumeration';

    const PROPERTIES = [
        'supersededBy',
    ];
}
