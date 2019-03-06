<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

class AudioObject extends Base
{
    use DaftObjectTraits\HasTranscript;

    const SCHEMA_ORG_TYPE = 'AudioObject';

    const PROPERTIES = [
        'transcript',
    ];
}
