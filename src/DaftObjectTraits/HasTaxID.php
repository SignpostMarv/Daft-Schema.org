<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait HasTaxID
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetTaxID() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'taxID',
            $this->RetrievePropertyValueFromData('taxID'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTaxID(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'taxID',
            __METHOD__,
            $value
        );
    }
}
