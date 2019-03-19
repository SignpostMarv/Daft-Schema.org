<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $caption
* @property array<int, string|PropertyValue> $exifData
* @property array<int, bool> $representativeOfPage
* @property array<int, MediaObject\ImageObject> $thumbnail
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'caption' => [
            'string',
        ],
        'exifData' => [
            'string',
            PropertyValue::class,
        ],
        'representativeOfPage' => [
            'boolean',
        ],
        'thumbnail' => [
            MediaObject\ImageObject::class,
        ],
    ];

    /**
    * @return array<int, string|PropertyValue>
    */
    public function GetExifData() : array
    {
        return $this->ExpectRetrievedValueIsArrayOfStringsOrPropertyValues('exifData');
    }

    /**
    * @param array<int, string|PropertyValue> $value
    */
    public function SetExifData(array $value) : void
    {
        $this->NudgePropertyValue(
            'exifData',
            $value,
            true
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
            $value
        );
    }
}
