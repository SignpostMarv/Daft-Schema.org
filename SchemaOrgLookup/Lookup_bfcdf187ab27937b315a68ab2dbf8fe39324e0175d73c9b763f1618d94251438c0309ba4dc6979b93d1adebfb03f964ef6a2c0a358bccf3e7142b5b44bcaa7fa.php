<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_bfcdf187ab27937b315a68ab2dbf8fe39324e0175d73c9b763f1618d94251438c0309ba4dc6979b93d1adebfb03f964ef6a2c0a358bccf3e7142b5b44bcaa7fa implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Organization\\PerformingGroup\\MusicGroup', 'SignpostMarv\\DaftObject\\SchemaOrg\\Organization\\PerformingGroup'];
    }
}
