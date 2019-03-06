<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\Issn;

class WebSite extends Base
{
    use Issn;

    const SCHEMA_ORG_TYPE = 'WebSite';

    const PROPERTIES = [
        'issn',
    ];
}
