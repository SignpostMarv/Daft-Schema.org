<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasDuns
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetDuns() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'duns',
            $this->RetrievePropertyValueFromData('duns'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDuns(array $value) : void
    {
        $this->NudgePropertyValue(
            'duns',
            $value,
            true
        );
    }
}
