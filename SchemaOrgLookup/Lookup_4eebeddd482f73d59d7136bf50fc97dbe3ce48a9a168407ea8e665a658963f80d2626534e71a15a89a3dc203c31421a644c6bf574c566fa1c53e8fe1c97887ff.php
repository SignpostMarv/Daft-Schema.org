<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_4eebeddd482f73d59d7136bf50fc97dbe3ce48a9a168407ea8e665a658963f80d2626534e71a15a89a3dc203c31421a644c6bf574c566fa1c53e8fe1c97887ff implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\StructuredValue\\QuantitativeValue\\MonetaryAmountDistribution'];
    }
}
