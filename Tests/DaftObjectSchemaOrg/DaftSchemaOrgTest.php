<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use DateTimeZone;
use Exception;
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

        static::assertIsString($json);

        static::assertSame(
            $json,
            json_encode($thing, JSON_PRETTY_PRINT)
        );

        /**
        * @var string
        */
        $json = $json;

        $from_json = SchemaOrg\Thing::DaftObjectFromJsonString($json);

        static::assertCount(3, $from_json->identifier);
        static::assertSame('foo', $from_json->identifier[0]);
        static::assertSame('bar', $from_json->identifier[1]);
        static::assertInstanceOf(
            SchemaOrg\Intangible\StructuredValue\PropertyValue::class,
            $from_json->identifier[2]
        );

        $from_str = json_encode(
            SchemaOrg\Thing::DaftObjectFromJsonString($json),
            JSON_PRETTY_PRINT
        );

        /**
        * @var array|false
        */
        $decoded = json_decode($json, true);

        static::assertIsArray($decoded);

        /**
        * @var array
        *
        * @psalm-var array<string, array<array-key, array<array-key, mixed>|scalar|object|null>|scalar|object|null>
        */
        $decoded = $decoded;

        $from_arr = json_encode(
            SchemaOrg\Thing::DaftObjectFromJsonArray($decoded),
            JSON_PRETTY_PRINT
        );

        static::assertSame($json, $from_str);

        static::assertSame($json, $from_arr);
    }

    public function test_supersededBy() : void
    {
        $obj = new SchemaOrg\Intangible\Enumeration();
        $class = new SchemaOrg\Intangible\IntangibleClass(['name' => ['Foo']]);
        $enumeration = new SchemaOrg\Intangible\Enumeration(['name' => ['Foo']]);
        $property = new SchemaOrg\Intangible\IntangibleProperty(['name' => ['Foo']]);

        $obj->SetSupersededBy([$class, $enumeration, $property]);

        static::assertContains($class, $obj->GetSupersededBy());
        static::assertContains($enumeration, $obj->GetSupersededBy());
        static::assertContains($property, $obj->GetSupersededBy());
    }

    /**
    * @psalm-return array<int, array{0:class-string<SchemaOrg\DataTypes\DateTimeInterface>, 1:string}>
    */
    public function dataProvider_DateTimeInterface() : array
    {
        return [
            [SchemaOrg\DataTypes\Date::class, '1970-01-01'],
            [SchemaOrg\DataTypes\DateTime::class, '1970-01-01T01:02:03Z+00:00'],
            [SchemaOrg\DataTypes\Time::class, '01:02:03Z+00:00'],
            [SchemaOrg\DataTypes\Date::class, '1970-01-01', 'Europe/London'],
            [SchemaOrg\DataTypes\DateTime::class, '1970-01-01T01:02:03Z+00:00', 'Europe/London'],
            [SchemaOrg\DataTypes\Time::class, '01:02:03Z+00:00', 'Europe/London'],
        ];
    }

    /**
    * @dataProvider dataProvider_DateTimeInterface
    *
    * @psalm-param class-string<SchemaOrg\DataTypes\DateTimeInterface> $data_type
    */
    public function test_DateTimeInterface_succeeds(string $data_type, string $input, string $timezone = null) : void
    {
        /**
        * @var DateTimeZone|null
        */
        $tz = null;

        if (is_string($timezone)) {
            $tz = new DateTimeZone($timezone);
        }

        static::assertInstanceOf($data_type, $data_type::ObtainFromString($input, $tz));
    }

    /**
    * @dataProvider dataProvider_DateTimeInterface
    *
    * @psalm-param class-string<SchemaOrg\DataTypes\DateTimeInterface> $data_type
    */
    public function test_DateTimeInterface_fails(string $data_type) : void
    {
        static::expectException(Exception::class);
        static::expectExceptionMessage(
            'Failed to parse time string (nope) at position 0 (n)' .
            ': The timezone could not be found in the database'
        );

        $data_type::DataTypeFromString('nope');
    }

    /**
    * @psalm-return array<int, array{0:class-string<SchemaOrg\DataTypes\DataType\Text>, 1:string}>
    */
    public function dataProvider_DataType_Text() : array
    {
        return [
            [SchemaOrg\DataTypes\DataType\Text\CssSelectorType::class, '.foo'],
            [SchemaOrg\DataTypes\DataType\Text\XPathType ::class, '//foo'],
        ];
    }

    /**
    * @dataProvider dataProvider_DataType_Text
    *
    * @psalm-param class-string<SchemaOrg\DataTypes\DataType\Text> $data_type
    */
    public function test_DataType_Text(string $data_type, string $text) : void
    {
        static::assertInstanceOf($data_type, $data_type::DataTypeFromString($text));
    }
}
