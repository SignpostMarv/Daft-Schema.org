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

/**
* @property array<int, CssSelectorType> $cssSelector
* @property array<int, XPathType> $xpath
*/
class SpeakableSpecification extends Base
{
    const SCHEMA_ORG_TYPE = 'SpeakableSpecification';

    const PROPERTIES = [
        'cssSelector',
        'xpath',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'cssSelector' => [
            CssSelectorType::class,
        ],
        'xpath' => [
            XPathType::class,
        ],
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
        $this->NudgePropertyValue(
            'cssSelector',
            $value
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
        $this->NudgePropertyValue(
            'xpath',
            $value
        );
    }
}
