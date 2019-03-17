<?php
/**
* @author SignpostMarv
*
* @see https://github.com/schemaorg/schemaorg/issues/1251#issuecomment-396059236
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;

/**
* {@inheritdoc}
*/
class WebPageElement extends Base
{
    const SCHEMA_ORG_TYPE = 'WebPageElement';
}
