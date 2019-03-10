<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $transcript
*/
class AudioObject extends Base
{
    use DaftObjectTraits\HasTranscript;

    const SCHEMA_ORG_TYPE = 'AudioObject';

    const PROPERTIES = [
        'transcript',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'transcript' => TypeUtilities::MULTI_TYPE_DICT__transcript,
    ];
}
