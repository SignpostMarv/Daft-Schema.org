<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAboutThing
{
    use DaftObjectTrait;

    /**
    * @return array<int, Thing>
    */
    public function GetAbout() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'about',
            $this->RetrievePropertyValueFromData('about'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetAbout(array $value) : void
    {
        $this->NudgePropertyValue(
            'about',
            $value
        );
    }
}
