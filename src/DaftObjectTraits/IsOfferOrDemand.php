<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\WarrantyPromise;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\PriceSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\TypeUtilities;

trait IsOfferOrDemand
{
    use AcceptedPaymentMethod;
    use AdvanceBookingRequirement;
    use HasAreaServed;
    use AvailabilityAndStartsAndEnds;
    use BusinessFunction;
    use DeliveryLeadTime;
    use EligibleCustomerTypeAndDurationAndQuantityAndRegionAndTransactionVolumeAndIneligibleRegion;
    use HasGtin;
    use IncludesObject;
    use HasValidFromThrough;
    use HasSku;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Place>
    */
    public function GetAvailableAtOrFrom() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableAtOrFrom',
            $this->RetrievePropertyValueFromData('availableAtOrFrom'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Place> $value
    */
    public function SetAvailableAtOrFrom(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'availableAtOrFrom',
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod>
    */
    public function GetAvailableDeliveryMethod() : array
    {
        /**
        * @var array<int, DeliveryMethod>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableDeliveryMethod',
            $this->RetrievePropertyValueFromData('availableDeliveryMethod'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod> $value
    */
    public function SetAvailableDeliveryMethod(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'availableDeliveryMethod',
            __METHOD__,
            $value,
            DeliveryMethod::class
        );
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetInventoryLevel() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'inventoryLevel',
            $this->RetrievePropertyValueFromData('inventoryLevel'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetInventoryLevel(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'inventoryLevel',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, Product|Service>
    */
    public function GetItemOffered() : array
    {
        /**
        * @var array<int, Product|Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemOffered',
            $this->RetrievePropertyValueFromData('itemOffered'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product|Service> $value
    */
    public function SetItemOffered(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'itemOffered',
            __METHOD__,
            $value,
            Product::class,
            Service::class
        );
    }

    /**
    * @return array<int, PriceSpecification>
    */
    public function GetPriceSpecification() : array
    {
        /**
        * @var array<int, PriceSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'priceSpecification',
            $this->RetrievePropertyValueFromData('priceSpecification'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PriceSpecification> $value
    */
    public function SetPriceSpecification(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'priceSpecification',
            __METHOD__,
            $value,
            PriceSpecification::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
    */
    public function GetSeller() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'seller',
            $this->RetrievePropertyValueFromData('seller'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $value
    */
    public function SetSeller(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons(
            'seller',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSerialNumber() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'serialNumber',
            $this->RetrievePropertyValueFromData('serialNumber'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSerialNumber(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'serialNumber',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, WarrantyPromise>
    */
    public function GetWarranty() : array
    {
        /**
        * @var array<int, WarrantyPromise>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'warranty',
            $this->RetrievePropertyValueFromData('warranty'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, WarrantyPromise> $value
    */
    public function SetWarranty(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'warranty',
            __METHOD__,
            $value,
            WarrantyPromise::class
        );
    }
}
