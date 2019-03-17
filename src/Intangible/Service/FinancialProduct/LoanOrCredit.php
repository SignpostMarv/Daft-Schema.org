<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\Service\FinancialProduct;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Duration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service\FinancialProduct as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\MonetaryAmount;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\RepaymentSpecification;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $currency
* @property array<int, int|float|MonetaryAmount> $amount
* @property array<int, Duration> $gracePeriod
* @property array<int, RepaymentSpecification> $loanRepaymentForm
* @property array<int, QuantitativeValue> $loanTerm
* @property array<int, string> $loanType
* @property array<int, bool> $recourseLoan
* @property array<int, bool> $renegotiableLoan
* @property array<int, string> $requiredCollateral
*/
class LoanOrCredit extends Base
{
    use DaftObjectTraits\Currency;

    const SCHEMA_ORG_TYPE = 'LoanOrCredit';

    const PROPERTIES = [
        'amount',
        'currency',
        'gracePeriod',
        'loanRepaymentForm',
        'loanTerm',
        'loanType',
        'recourseLoan',
        'renegotiableLoan',
        'requiredCollateral',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'amount' => [
            'integer',
            'double',
            MonetaryAmount::class,
        ],
        'gracePeriod' => [
            Duration::class,
        ],
        'loanRepaymentForm' => [
            RepaymentSpecification::class,
        ],
        'loanTerm' => [
            QuantitativeValue::class,
        ],
        'loanType' => [
            'string',
        ],
        'recourseLoan' => [
            'boolean',
        ],
        'renegotiableLoan' => [
            'boolean',
        ],
        'requiredCollateral' => [
            'string',
        ],
    ];

    /**
    * @return array<int, int|float|MonetaryAmount>
    */
    public function GetAmount() : array
    {
        /**
        * @var array<int, int|float|MonetaryAmount>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'amount',
            $this->RetrievePropertyValueFromData('amount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|MonetaryAmount> $value
    */
    public function SetAmount(array $value) : void
    {
        $this->NudgePropertyWithUniqueNumericsOrThings(
            'amount',
            __METHOD__,
            $value,
            MonetaryAmount::class
        );
    }

    /**
    * @return array<int, Duration>
    */
    public function GetGracePeriod() : array
    {
        /**
        * @var array<int, Duration>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'gracePeriod',
            $this->RetrievePropertyValueFromData('gracePeriod'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Duration> $value
    */
    public function SetGracePeriod(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'gracePeriod',
            __METHOD__,
            $value,
            Duration::class
        );
    }

    /**
    * @return array<int, RepaymentSpecification>
    */
    public function GetLoanRepaymentForm() : array
    {
        /**
        * @var array<int, RepaymentSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'loanRepaymentForm',
            $this->RetrievePropertyValueFromData('loanRepaymentForm'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, RepaymentSpecification> $value
    */
    public function SetLoanRepaymentForm(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'loanRepaymentForm',
            __METHOD__,
            $value,
            RepaymentSpecification::class
        );
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetLoanTerm() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'loanTerm',
            $this->RetrievePropertyValueFromData('loanTerm'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetLoanTerm(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'loanTerm',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetLoanType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'loanType',
            $this->RetrievePropertyValueFromData('loanType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLoanType(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'loanType',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetRecourseLoan() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'recourseLoan',
            $this->RetrievePropertyValueFromData('recourseLoan'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetRecourseLoan(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'recourseLoan',
            $value
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetRenegotiableLoan() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'renegotiableLoan',
            $this->RetrievePropertyValueFromData('renegotiableLoan'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetRenegotiableLoan(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'renegotiableLoan',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetRequiredCollateral() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'requiredCollateral',
            $this->RetrievePropertyValueFromData('requiredCollateral'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetRequiredCollateral(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'requiredCollateral',
            __METHOD__,
            $value
        );
    }
}
