<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_c08b800ef512a7168b3313828bc50dad2cfc062d51a3d3b7762cb380782dae0ebd3b0b43609f3726fa9c67ef0916859b865a446e8b870b4b260c719065718efd implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\GeoShape'];
    }
}
