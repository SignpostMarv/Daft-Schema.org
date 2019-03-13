<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg\Intangible\Rating;

use InvalidArgumentException;
use Generator;
use ReflectionClassConstant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg\DaftObjectFuzzingTest as Base;

class FuzzingTest extends Base
{
    protected static function FuzzingImplementationsViaGeneratorRootType() : string
    {
        return SchemaOrg\Intangible\Rating::class;
    }
}
