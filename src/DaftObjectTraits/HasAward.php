<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAward
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetAward() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'award',
            $this->RetrievePropertyValueFromData('award'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAward(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'award',
            __METHOD__,
            $value
        );
    }
}
