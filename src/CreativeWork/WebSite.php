<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\Issn;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $issn
*/
class WebSite extends Base
{
    use Issn;

    const SCHEMA_ORG_TYPE = 'WebSite';

    const PROPERTIES = [
        'issn',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'issn' => TypeUtilities::MULTI_TYPE_DICT__issn,
    ];
}
