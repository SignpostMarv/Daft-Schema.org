<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_f7e45004b4242d12e2bae0ec26dfbd53abea64f4554fac2410a26b562c4c69ffc3265cad7c354faa4447f65abedbf3765b3011715a639aedf47c84b73197248f implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\GeospatialGeometry'];
    }
}
