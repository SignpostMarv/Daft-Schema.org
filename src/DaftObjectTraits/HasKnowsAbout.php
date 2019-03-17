<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasKnowsAbout
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Thing>
    */
    public function GetKnowsAbout() : array
    {
        /**
        * @var array<int, string|Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'knowsAbout',
            $this->RetrievePropertyValueFromData('knowsAbout'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Thing> $value
    */
    public function SetKnowsAbout(array $value) : void
    {
        $this->NudgePropertyValue(
            'knowsAbout',
            $value,
            true
        );
    }
}
