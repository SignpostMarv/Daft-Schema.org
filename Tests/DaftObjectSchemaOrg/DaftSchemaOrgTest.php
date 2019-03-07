<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\Tests\TestCase as Base;

class DaftSchemaOrgTest extends Base
{
    public function testThing() : void
    {
        $propval = new SchemaOrg\Intangible\StructuredValue\PropertyValue(
            [
                'maxValue' => [
                    20,
                    30,
                    40,
                ],
            ],
            true
        );

        $thing = new SchemaOrg\Thing(
            [
                'identifier' => [
                    'foo',
                    'bar',
                    $propval,
                ],
            ],
            true
        );

        static::assertCount(3, $thing->identifier);

        $json = '{"@context":"http://schema.org","@type":"Thing","identifier":["foo","bar",{"@context":"http://schema.org","@type":"PropertyValue","maxValue":[20,30,40]}]}';

        $json = json_encode(json_decode($json), JSON_PRETTY_PRINT);

        static::assertSame(
            $json,
            json_encode($thing, JSON_PRETTY_PRINT)
        );

        $from_str = json_encode(
            SchemaOrg\Thing::DaftObjectFromJsonString($json),
            JSON_PRETTY_PRINT
        );
        $from_arr = json_encode(
            SchemaOrg\Thing::DaftObjectFromJsonArray(json_decode($json, true)),
            JSON_PRETTY_PRINT
        );

        static::assertSame($json, $from_str);

        static::assertSame($json, $from_arr);
    }
}