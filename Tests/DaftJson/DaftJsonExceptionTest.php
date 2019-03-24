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

    public function test_Thing_DaftObjectFromJsonArray_fails_with_unsupported_Thing() : void
    {
        static::expectException(InvalidArgumentException::class);
        static::expectExceptionMessage(
            'Argument 3 (identifier) passed to ' .
            Thing::class .
            '::DaftObjectFromJsonArrayFromArrayMapVal() did not correspond to an instance of ' .
            Thing::class .
            ' as defined in argument 2!'
        );
        Thing::DaftObjectFromJsonArray([
            'identifier' => [
                [
                    '@context' => 'foo',
                    '@type' => 'bar',
                ],
            ],
        ]);
    }
}
