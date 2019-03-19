<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_e77ff30d1a68816be246647b6a3c39ea1ac50f73808557db352265a029265d10eafc14ae73c5143cee4242ebaac4fcdb726a0f1975be7e697a00c09487e89f0d implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\Enumeration\\DayOfWeek'];
    }
}
