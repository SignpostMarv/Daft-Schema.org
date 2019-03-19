<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_defe2266f6b00b041a89713433d133d404456d8acfcab7ef2ad1e657f8212038e6b75be2ffd146d7f1a43903f1f707b48ec3eaa0856dfb6c653009446eed32fe implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\CreativeWork\\DataCatalog'];
    }
}
