<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasThumbnail
{
    use DaftObjectTrait;

    /**
    * @return array<int, ImageObject>
    */
    public function GetThumbnail() : array
    {
        /**
        * @var array<int, ImageObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'thumbnail',
            $this->RetrievePropertyValueFromData('thumbnail'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ImageObject> $value
    */
    public function SetThumbnail(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'thumbnail',
            __METHOD__,
            $value,
            ImageObject::class
        );
    }
}
