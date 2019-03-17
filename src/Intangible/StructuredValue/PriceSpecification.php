<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, QuantitativeValue> $eligibleQuantity
* @property array<int, PriceSpecification> $eligibleTransactionVolume
* @property array<int, int> $maxPrice
* @property array<int, int> $minPrice
* @property array<int, int|string> $price
* @property array<int, string> $priceCurrency
* @property array<int, bool> $valueAddedTaxIncluded
* @property array<int, DateTime> $validFrom
* @property array<int, DateTime> $validThrough
*/
class PriceSpecification extends Base
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'eligibleQuantity' => [
            QuantitativeValue::class,
        ],
        'eligibleTransactionVolume' => [
            PriceSpecification::class,
        ],
        'maxPrice' => [
            'integer',
        ],
        'minPrice' => [
            'integer',
        ],
        'price' => [
            'integer',
            'string',
        ],
        'priceCurrency' => [
            'string',
        ],
        'valueAddedTaxIncluded' => [
            'boolean',
        ],
        'validFrom' => [
            DateTime::class,
        ],
        'validThrough' => [
            DateTime::class,
        ],
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
        $this->NudgePropertyValue(
            'eligibleQuantity',
            $value
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
        $this->NudgePropertyValue(
            'eligibleTransactionVolume',
            $value
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
        $this->NudgePropertyValue('maxPrice', $value);
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
        $this->NudgePropertyValue('minPrice', $value);
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
        $this->NudgePropertyValue(
            'price',
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
        $this->NudgePropertyValue(
            'priceCurrency',
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
            $value
        );
    }
}
