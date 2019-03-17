<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasIsicV4
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetIsicV4() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isicV4',
            $this->RetrievePropertyValueFromData('isicV4'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetIsicV4(array $value) : void
    {
        $this->NudgePropertyValue(
            'isicV4',
            $value,
            true
        );
    }
}
