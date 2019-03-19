<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_31b74c902c6625bde2287ee87a4890cfce1fec4b3d6dae9d0ec8f369a3cbc4ff35340b3335db53f3b4d065077dc541b530d77046d8bebad038357bd0abbd940b implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\StructuredValue\\OwnershipInfo'];
    }
}
