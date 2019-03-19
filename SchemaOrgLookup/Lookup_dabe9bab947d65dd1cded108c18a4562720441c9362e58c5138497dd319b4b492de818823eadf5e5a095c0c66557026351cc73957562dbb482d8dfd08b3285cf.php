<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_dabe9bab947d65dd1cded108c18a4562720441c9362e58c5138497dd319b4b492de818823eadf5e5a095c0c66557026351cc73957562dbb482d8dfd08b3285cf implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\CreativeWork\\MusicPlaylist\\MusicRelease'];
    }
}
