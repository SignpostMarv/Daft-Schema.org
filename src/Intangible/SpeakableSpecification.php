<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType\Text\CssSelectorType;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType\Text\XPathType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class SpeakableSpecification extends Base
{
    const SCHEMA_ORG_TYPE = 'SpeakableSpecification';

    const PROPERTIES = [
        'cssSelector',
        'xpath',
    ];

    /**
    * @return array<int, CssSelectorType>
    */
    public function GetCssSelector() : array
    {
        /**
        * @var array<int, CssSelectorType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'cssSelector',
            $this->RetrievePropertyValueFromData('cssSelector'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CssSelectorType> $value
    */
    public function SetCssSelector(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'cssSelector',
            __METHOD__,
            $value,
            CssSelectorType::class
        );
    }

    /**
    * @return array<int, XPathType>
    */
    public function GetXpath() : array
    {
        /**
        * @var array<int, XPathType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'xpath',
            $this->RetrievePropertyValueFromData('xpath'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, XPathType> $value
    */
    public function SetXpath(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'xpath',
            __METHOD__,
            $value,
            XPathType::class
        );
    }
}
