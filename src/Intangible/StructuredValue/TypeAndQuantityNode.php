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

class TypeAndQuantityNode extends Base
{
    use DaftObjectTraits\HasUnitCodeText;

    const SCHEMA_ORG_TYPE = 'TypeAndQuantityNode';

    const PROPERTIES = [
        'amountOfThisGood',
        'businessFunction',
        'typeOfGood',
        'unitCode',
        'unitText',
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
        $this->NudgePropertyWithUniqueIntegersOrFloats(
            'amountOfThisGood',
            __METHOD__,
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'businessFunction',
            __METHOD__,
            $value,
            BusinessFunction::class
        );
    }

    /**
    * @return array<int, Product|Service>
    */
    public function GetTypeOfGood() : array
    {
        /**
        * @var array<int, Product|Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'typeOfGood',
            $this->RetrievePropertyValueFromData('typeOfGood'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product|Service> $value
    */
    public function SetTypeOfGood(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'typeOfGood',
            __METHOD__,
            $value,
            Product::class,
            Service::class
        );
    }
}
