<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessFunction;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int|float> $amountOfThisGood
* @property array<int, BusinessFunction> $businessFunction
* @property array<int, Product|Service> $typeOfGood
* @property array<int, string> $unitCode
* @property array<int, string> $unitText
*/
class TypeAndQuantityNode extends Base
{
    use DaftObjectTraits\HasUnitCodeText;
    use DaftObjectTraits\TypeOfGood;

    const SCHEMA_ORG_TYPE = 'TypeAndQuantityNode';

    const PROPERTIES = [
        'amountOfThisGood',
        'businessFunction',
        'typeOfGood',
        'unitCode',
        'unitText',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'amountOfThisGood' => [
            'integer',
            'double',
        ],
        'businessFunction' => [
            BusinessFunction::class,
        ],
        'typeOfGood' => [
            Product::class,
            Service::class,
        ],
        'unitCode' => [
            'string',
        ],
        'unitText' => [
            'string',
        ],
    ];

    /**
    * @return array<int, int|float>
    */
    public function GetAmountOfThisGood() : array
    {
        /**
        * @var array<int, int|float>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'amountOfThisGood',
            $this->RetrievePropertyValueFromData('amountOfThisGood'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float> $value
    */
    public function SetAmountOfThisGood(array $value) : void
    {
        $this->NudgePropertyValue(
            'amountOfThisGood',
            $value
        );
    }

    /**
    * @return array<int, BusinessFunction>
    */
    public function GetBusinessFunction() : array
    {
        /**
        * @var array<int, BusinessFunction>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'businessFunction',
            $this->RetrievePropertyValueFromData('businessFunction'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, BusinessFunction> $value
    */
    public function SetBusinessFunction(array $value) : void
    {
        $this->NudgePropertyValue(
            'businessFunction',
            $value
        );
    }
}
