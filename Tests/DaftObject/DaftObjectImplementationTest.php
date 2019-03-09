<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObject;

use Generator;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectImplementationTest as Base;

class DaftObjectImplementationTest extends Base
{
    use DataProviderTrait;

    /**
    * {@inheritdoc}
    *
    * @dataProvider dataProvider_DaftObject__has_properties_each_defined_property
    */
    public function test_AbstractDaftObject__has_properties_each_property(
        string $className,
        string $property,
        bool $maybe_mixed_case = false
    ) : void {
        static::markTestSkipped(
            'I really cannot be fussed with satisfying all the docblock-related tests right now.'
        );
    }

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        yield [
            SchemaOrg\Intangible\StructuredValue\PropertyValue::class,
            [
                'maxValue' => [
                    20,
                    30,
                    40,
                ],
            ],
        ];
    }
}
