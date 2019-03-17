<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectImplementationTest as Base;

class DaftObjectImplementationTest extends Base
{
    use DataProviderTrait;

    public function test__inherited_getters() : void
    {
        $thing = Thing::DaftObjectPublicOrProtectedGetters();
        $creative_work = CreativeWork::DaftObjectPublicOrProtectedGetters();

        foreach ($thing as $property) {
            static::assertContains($property, $creative_work);
        }
    }
}
