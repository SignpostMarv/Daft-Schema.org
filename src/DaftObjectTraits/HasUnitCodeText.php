<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait HasUnitCodeText
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetUnitCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'unitCode',
            $this->RetrievePropertyValueFromData('unitCode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetUnitCode(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'unitCode',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetUnitText() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'unitText',
            $this->RetrievePropertyValueFromData('unitText'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetUnitText(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'unitText',
            __METHOD__,
            $value
        );
    }
}
