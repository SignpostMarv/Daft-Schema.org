<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int|float|QuantitativeValue> $annualPercentageRate
* @property array<int, string> $feesAndCommissionsSpecification
* @property array<int, int|float|QuantitativeValue> $interestRate
*/
class FinancialProduct extends Base
{
    const SCHEMA_ORG_TYPE = 'FinancialProduct';

    const PROPERTIES = [
        'annualPercentageRate',
        'feesAndCommissionsSpecification',
        'interestRate',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'annualPercentageRate' => [
            'integer',
            'double',
            QuantitativeValue::class,
        ],
        'feesAndCommissionsSpecification' => [
            'string',
        ],
        'interestRate' => [
            'integer',
            'double',
            QuantitativeValue::class,
        ],
    ];

    /**
    * @return array<int, int|float|QuantitativeValue>
    */
    public function GetAnnualPercentageRate() : array
    {
        /**
        * @var array<int, int|float|QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'annualPercentageRate',
            $this->RetrievePropertyValueFromData('annualPercentageRate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|QuantitativeValue> $value
    */
    public function SetAnnualPercentageRate(array $value) : void
    {
        $this->NudgePropertyValue(
            'annualPercentageRate',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetFeesAndCommissionsSpecification() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'feesAndCommissionsSpecification',
            $this->RetrievePropertyValueFromData('feesAndCommissionsSpecification'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetFeesAndCommissionsSpecification(array $value) : void
    {
        $this->NudgePropertyValue(
            'feesAndCommissionsSpecification',
            $value,
            true
        );
    }

    /**
    * @return array<int, int|float|QuantitativeValue>
    */
    public function GetInterestRate() : array
    {
        /**
        * @var array<int, int|float|QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'interestRate',
            $this->RetrievePropertyValueFromData('interestRate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|QuantitativeValue> $value
    */
    public function SetInterestRate(array $value) : void
    {
        $this->NudgePropertyValue(
            'interestRate',
            $value
        );
    }
}
