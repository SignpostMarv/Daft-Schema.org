<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasLogo
{
    use DaftObjectTrait;

    /**
    * @return array<int, ImageObject>
    */
    public function GetLogo() : array
    {
        /**
        * @var array<int, ImageObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'logo',
            $this->RetrievePropertyValueFromData('logo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ImageObject> $value
    */
    public function SetLogo(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'logo',
            __METHOD__,
            $value,
            ImageObject::class
        );
    }
}
