<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasGlobalLocationNumber
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetGlobalLocationNumber() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'globalLocationNumber',
            $this->RetrievePropertyValueFromData('globalLocationNumber'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetGlobalLocationNumber(array $value) : void
    {
        $this->NudgePropertyValue(
            'globalLocationNumber',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
