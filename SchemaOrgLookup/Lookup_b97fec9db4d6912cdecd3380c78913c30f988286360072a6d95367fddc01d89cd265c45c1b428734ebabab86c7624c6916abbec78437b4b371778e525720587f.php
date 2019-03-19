<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_b97fec9db4d6912cdecd3380c78913c30f988286360072a6d95367fddc01d89cd265c45c1b428734ebabab86c7624c6916abbec78437b4b371778e525720587f implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\Service\\BroadcastService'];
    }
}
