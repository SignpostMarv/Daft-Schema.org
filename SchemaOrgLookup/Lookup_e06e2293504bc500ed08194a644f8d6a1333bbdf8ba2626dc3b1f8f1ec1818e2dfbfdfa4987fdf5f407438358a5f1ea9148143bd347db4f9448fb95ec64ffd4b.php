<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_e06e2293504bc500ed08194a644f8d6a1333bbdf8ba2626dc3b1f8f1ec1818e2dfbfdfa4987fdf5f407438358a5f1ea9148143bd347db4f9448fb95ec64ffd4b implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Event\\PublicationEvent', 'SignpostMarv\\DaftObject\\SchemaOrg\\Event'];
    }
}
