<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_fc0155a379ec540fd95c45515e942b5bcf22e824b122dec8fac6a4598cccee14e2fe03caf0ef1c9a686627e57cfdb7c17b256202c314aef1de7cc259bae21b2c implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\CreativeWork\\Comment\\Answer', 'SignpostMarv\\DaftObject\\SchemaOrg\\CreativeWork\\Comment\\CorrectionComment', 'SignpostMarv\\DaftObject\\SchemaOrg\\CreativeWork\\Comment'];
    }
}
