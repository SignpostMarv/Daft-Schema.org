<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_dc96e371ac1dc02cc62bb82f3846bdb68bb293aae754db9c6ab9d135f7547159bd04a3baab9c6bf0505f6b282f396988927869abe48b12dc18386b9b65de46ac implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\StructuredValue\\MonetaryAmount'];
    }
}
