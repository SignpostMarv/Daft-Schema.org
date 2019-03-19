<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_af2bbadd7f7d769ceb084d92b2fd7e3cc7c7055bd7c1377cb136ccc238c230e6fbbee79acec5502f7f2f7d394c755c088e151aeeff8244f251660580c11bffad implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\GeoCoordinates'];
    }
}
