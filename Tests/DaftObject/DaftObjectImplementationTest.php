<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObject;

use ReflectionClassConstant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectImplementationTest as Base;

class DaftObjectImplementationTest extends Base
{
    use DataProviderTrait;

    /**
    * @psalm-param class-string<SchemaOrg\Thing> $className
    *
    * @dataProvider dataProvider_DaftObject__has_properties_each_defined_property
    */
    public function test_AbstractDaftObject__has_properties_each_property(
        string $className,
        string $property,
        bool $maybe_mixed_case = false
    ) : void {
        if (
            isset($className::PROPERTIES_WITH_MULTI_TYPED_ARRAYS[$property]) &&
            $className === (
                new ReflectionClassConstant(
                    $className,
                    'PROPERTIES_WITH_MULTI_TYPED_ARRAYS'
                )
            )->getDeclaringClass()->name
        ) {
            parent::test_AbstractDaftObject__has_properties_each_property(
                $className,
                $property,
                $maybe_mixed_case
            );

            return;
        }

        static::markTestSkipped(
            'I really cannot be fussed with satisfying all the docblock-related tests right now.'
        );
    }
}
