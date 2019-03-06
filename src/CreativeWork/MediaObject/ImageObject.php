<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\TypeUtilities;

class ImageObject extends MediaObject
{
    use DaftObjectTraits\HasCaption;
    use DaftObjectTraits\HasThumbnail;

    const SCHEMA_ORG_TYPE = 'ImageObject';

    const PROPERTIES = [
        'caption',
        'exifData',
        'representativeOfPage',
        'thumbnail',
    ];

    /**
    * @return array<int, string|PropertyValue>
    */
    public function GetExifData() : array
    {
        /**
        * @var array<int, string|PropertyValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'exifData',
            $this->RetrievePropertyValueFromData('exifData'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|PropertyValue> $value
    */
    public function SetExifData(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'exifData',
            __METHOD__,
            $value,
            PropertyValue::class
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetRepresentativeOfPage() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'representativeOfPage',
            $this->RetrievePropertyValueFromData('representativeOfPage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetRepresentativeOfPage(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'representativeOfPage',
            __METHOD__,
            $value
        );
    }
}
