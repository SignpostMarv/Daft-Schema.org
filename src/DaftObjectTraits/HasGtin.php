<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasGtin
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetGtin12() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'gtin12',
            $this->RetrievePropertyValueFromData('gtin12'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetGtin12(array $value) : void
    {
        $this->NudgePropertyValue(
            'gtin12',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetGtin13() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'gtin13',
            $this->RetrievePropertyValueFromData('gtin13'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetGtin13(array $value) : void
    {
        $this->NudgePropertyValue(
            'gtin13',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetGtin14() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'gtin14',
            $this->RetrievePropertyValueFromData('gtin14'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetGtin14(array $value) : void
    {
        $this->NudgePropertyValue(
            'gtin14',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetGtin8() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'gtin8',
            $this->RetrievePropertyValueFromData('gtin8'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetGtin8(array $value) : void
    {
        $this->NudgePropertyValue(
            'gtin8',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
