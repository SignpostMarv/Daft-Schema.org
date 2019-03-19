<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_d1b722da381b542a45899c7656d4b99961c2c584ae2d965cd7f04980682313bcf4c44856d74b9ba1acceea48a4a417f8cd05f841c8731e3f2d6834482186fdcd implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\CreativeWork\\Review'];
    }
}
