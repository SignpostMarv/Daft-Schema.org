<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_c992af60989b0b844f1e73fd5602db2f16505294b8f4d8a07244f21dcf467d4e77cedb5c765a046105fe8b1f10b155d0711327d4316756edc8609a7452a44cae implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\Quantity\\Distance', 'SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\Quantity\\Duration', 'SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\Quantity'];
    }
}
