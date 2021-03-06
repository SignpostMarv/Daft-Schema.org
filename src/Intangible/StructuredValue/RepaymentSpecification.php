<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int|float|MonetaryAmount> $downPayment
* @property array<int, MonetaryAmount> $earlyPrepaymentPenalty
* @property array<int, MonetaryAmount> $loanPaymentAmount
* @property array<int, int|float> $loanPaymentFrequency
* @property array<int, int|float> $numberOfLoanPayments
*/
class RepaymentSpecification extends Base
{
    const SCHEMA_ORG_TYPE = 'RepaymentSpecification';

    const PROPERTIES = [
        'downPayment',
        'earlyPrepaymentPenalty',
        'loanPaymentAmount',
        'loanPaymentFrequency',
        'numberOfLoanPayments',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'downPayment' => [
            'integer',
            'double',
            MonetaryAmount::class,
        ],
        'earlyPrepaymentPenalty' => [
            MonetaryAmount::class,
        ],
        'loanPaymentAmount' => [
            MonetaryAmount::class,
        ],
        'loanPaymentFrequency' => [
            'integer',
            'double',
        ],
        'numberOfLoanPayments' => [
            'integer',
            'double',
        ],
    ];

    /**
    * @return array<int, int|float|MonetaryAmount>
    */
    public function GetDownPayment() : array
    {
        /**
        * @var array<int, int|float|MonetaryAmount>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'downPayment',
            $this->RetrievePropertyValueFromData('downPayment'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|MonetaryAmount> $value
    */
    public function SetDownPayment(array $value) : void
    {
        $this->NudgePropertyValue(
            'downPayment',
            $value
        );
    }

    /**
    * @return array<int, MonetaryAmount>
    */
    public function GetEarlyPrepaymentPenalty() : array
    {
        /**
        * @var array<int, MonetaryAmount>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'earlyPrepaymentPenalty',
            $this->RetrievePropertyValueFromData('earlyPrepaymentPenalty'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MonetaryAmount> $value
    */
    public function SetEarlyPrepaymentPenalty(array $value) : void
    {
        $this->NudgePropertyValue(
            'earlyPrepaymentPenalty',
            $value
        );
    }

    /**
    * @return array<int, MonetaryAmount>
    */
    public function GetLoanPaymentAmount() : array
    {
        /**
        * @var array<int, MonetaryAmount>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'loanPaymentAmount',
            $this->RetrievePropertyValueFromData('loanPaymentAmount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MonetaryAmount> $value
    */
    public function SetLoanPaymentAmount(array $value) : void
    {
        $this->NudgePropertyValue(
            'loanPaymentAmount',
            $value
        );
    }

    /**
    * @return array<int, int|float>
    */
    public function GetLoanPaymentFrequency() : array
    {
        /**
        * @var array<int, int|float>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'loanPaymentFrequency',
            $this->RetrievePropertyValueFromData('loanPaymentFrequency'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float> $value
    */
    public function SetLoanPaymentFrequency(array $value) : void
    {
        $this->NudgePropertyValue(
            'loanPaymentFrequency',
            $value
        );
    }

    /**
    * @return array<int, int|float>
    */
    public function GetNumberOfLoanPayments() : array
    {
        /**
        * @var array<int, int|float>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'numberOfLoanPayments',
            $this->RetrievePropertyValueFromData('numberOfLoanPayments'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float> $value
    */
    public function SetNumberOfLoanPayments(array $value) : void
    {
        $this->NudgePropertyValue(
            'numberOfLoanPayments',
            $value
        );
    }
}
