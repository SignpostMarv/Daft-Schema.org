<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasTelephone
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetTelephone() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'telephone',
            $this->RetrievePropertyValueFromData('telephone'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTelephone(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'telephone',
            __METHOD__,
            $value
        );
    }
}
