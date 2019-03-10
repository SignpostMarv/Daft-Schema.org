<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PaymentMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service\FinancialProduct\LoanOrCredit;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait AcceptedPaymentMethod
{
    use DaftObjectTrait;

    /**
    * @return array<int, LoanOrCredit|PaymentMethod>
    */
    public function GetAcceptedPaymentMethod() : array
    {
        /**
        * @var array<int, LoanOrCredit|PaymentMethod>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'acceptedPaymentMethod',
            $this->RetrievePropertyValueFromData('acceptedPaymentMethod'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, LoanOrCredit|PaymentMethod> $value
    */
    public function SetAcceptedPaymentMethod(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'acceptedPaymentMethod',
            __METHOD__,
            $value,
            LoanOrCredit::class,
            PaymentMethod::class
        );
    }
}
