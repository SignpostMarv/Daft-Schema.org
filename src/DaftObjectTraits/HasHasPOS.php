<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasHasPOS
{
    use DaftObjectTrait;

    /**
    * @return array<int, Place>
    */
    public function GetHasPOS() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hasPOS',
            $this->RetrievePropertyValueFromData('hasPOS'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetHasPOS(array $value) : void
    {
        $this->NudgePropertyValueWithUniquePlaces(
            'hasPOS',
            __METHOD__,
            $value
        );
    }
}
