<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\TypeUtilities;

class PriceSpecification extends Thing
{
    use DaftObjectTraits\HasValidFromThrough;

    const SCHEMA_ORG_TYPE = 'PriceSpecification';

    const PROPERTIES = [
        'eligibleQuantity',
        'eligibleTransactionVolume',
        'maxPrice',
        'minPrice',
        'price',
        'priceCurrency',
        'validFrom',
        'validThrough',
        'valueAddedTaxIncluded',
    ];

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetEligibleQuantity() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleQuantity',
            $this->RetrievePropertyValueFromData('eligibleQuantity'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PriceSpecification> $value
    */
    public function SetEligibleQuantity(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eligibleQuantity',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, PriceSpecification>
    */
    public function GetEligibleTransactionVolume() : array
    {
        /**
        * @var array<int, PriceSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'eligibleTransactionVolume',
            $this->RetrievePropertyValueFromData('eligibleTransactionVolume'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PriceSpecification> $value
    */
    public function SetEligibleTransactionVolume(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'eligibleTransactionVolume',
            __METHOD__,
            $value,
            PriceSpecification::class
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetMaxPrice() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'maxPrice',
            $this->RetrievePropertyValueFromData('maxPrice'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetMaxPrice(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers('maxPrice', __METHOD__, $value);
    }

    /**
    * @return array<int, int>
    */
    public function GetMinPrice() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'minPrice',
            $this->RetrievePropertyValueFromData('minPrice'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetMinPrice(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers('minPrice', __METHOD__, $value);
    }

    /**
    * @return array<int, int|string>
    */
    public function GetPrice() : array
    {
        /**
        * @var array<int, int|string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'price',
            $this->RetrievePropertyValueFromData('price'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|string> $value
    */
    public function SetPrice(array $value) : void
    {
        $this->NudgePropertWithUniqueIntegersOrTrimmedStrings(
            'price',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPriceCurrency() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'priceCurrency',
            $this->RetrievePropertyValueFromData('priceCurrency'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPriceCurrency(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'priceCurrency',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetValueAddedTaxIncluded() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'valueAddedTaxIncluded',
            $this->RetrievePropertyValueFromData('valueAddedTaxIncluded'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetValueAddedTaxIncluded(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'valueAddedTaxIncluded',
            __METHOD__,
            $value
        );
    }
}
