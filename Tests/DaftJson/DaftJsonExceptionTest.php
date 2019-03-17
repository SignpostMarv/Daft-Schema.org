<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftJson;

use InvalidArgumentException;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\Tests\DaftJson\DaftJsonExceptionTest as Base;

class DaftJsonExceptionTest extends Base
{
    use DataProviderTrait;

    public function test__Thing_DaftObjectFromJsonArray__requires_string_keys() : void
    {
        static::expectException(InvalidArgumentException::class);
        static::expectExceptionMessage(
            'Argument 1 passed to ' .
            Thing::class .
            '::DaftObjectFromJsonArray() must have all-string indices!'
        );

        Thing::DaftObjectFromJsonArray(['Foo']);
    }
}
