<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasVatID
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetVatID() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'vatID',
            $this->RetrievePropertyValueFromData('vatID'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetVatID(array $value) : void
    {
        $this->NudgePropertyValue(
            'vatID',
            $value,
            true
        );
    }
}
