<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait HasIsicV4
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetIsicv4() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isicv4',
            $this->RetrievePropertyValueFromData('isicv4'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetIsicv4(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'isicv4',
            __METHOD__,
            $value
        );
    }
}
