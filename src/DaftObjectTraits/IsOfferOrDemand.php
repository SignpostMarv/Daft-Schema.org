<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PriceSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\WarrantyPromise;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

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
    * @return array<int, Place>
    */
    public function GetAvailableAtOrFrom() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableAtOrFrom',
            $this->RetrievePropertyValueFromData('availableAtOrFrom'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetAvailableAtOrFrom(array $value) : void
    {
        $this->NudgePropertyValue(
            'availableAtOrFrom',
            $value
        );
    }

    /**
    * @return array<int, DeliveryMethod>
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
    * @param array<int, DeliveryMethod> $value
    */
    public function SetAvailableDeliveryMethod(array $value) : void
    {
        $this->NudgePropertyValue(
            'availableDeliveryMethod',
            $value
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
        $this->NudgePropertyValue(
            'inventoryLevel',
            $value
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
        $this->NudgePropertyValue(
            'itemOffered',
            $value
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
        $this->NudgePropertyValue(
            'priceSpecification',
            $value
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetSeller() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'seller',
            $this->RetrievePropertyValueFromData('seller'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetSeller(array $value) : void
    {
        $this->NudgePropertyValue(
            'seller',
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
        $this->NudgePropertyValue(
            'serialNumber',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
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
        $this->NudgePropertyValue(
            'warranty',
            $value
        );
    }
}
