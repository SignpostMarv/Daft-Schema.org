<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasCaption
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetCaption() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'caption',
            $this->RetrievePropertyValueFromData('caption'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCaption(array $value) : void
    {
        $this->NudgePropertyValue(
            'caption',
            $value,
            true
        );
    }
}
