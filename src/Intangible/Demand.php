<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\GeoShape;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessEntityType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessFunction;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DeliveryMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ItemAvailability;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\OfferItemCondition;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PaymentMethod;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service\FinancialProduct\LoanOrCredit;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PriceSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\TypeAndQuantityNode;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\WarrantyPromise;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, LoanOrCredit|PaymentMethod> $acceptedPaymentMethod
* @property array<int, QuantitativeValue> $advanceBookingRequirement
* @property array<int, string|AdministrativeArea|GeoShape|Place> $areaServed
* @property array<int, ItemAvailability> $availability
* @property array<int, DateTime> $availabilityEnds
* @property array<int, DateTime> $availabilityStarts
* @property array<int, Place> $availableAtOrFrom
* @property array<int, DeliveryMethod> $availableDeliveryMethod
* @property array<int, Type> $businessFunction
* @property array<int, QuantitativeValue> $deliveryLeadTime
* @property array<int, BusinessEntityType> $eligibleCustomerType
* @property array<int, QuantitativeValue> $eligibleDuration
* @property array<int, QuantitativeValue> $eligibleQuantity
* @property array<int, string|GeoShape|Place> $eligibleRegion
* @property array<int, PriceSpecification> $eligibleTransactionVolume
* @property array<int, string> $gtin12
* @property array<int, string> $gtin13
* @property array<int, string> $gtin14
* @property array<int, string> $gtin8
* @property array<int, TypeAndQuantityNode> $includesObject
* @property array<int, string|GeoShape|Place> $ineligibleRegion
* @property array<int, QuantitativeValue> $inventoryLevel
* @property array<int, OfferItemCondition> $itemCondition
* @property array<int, Product|Service> $itemOffered
* @property array<int, string> $mpn
* @property array<int, PriceSpecification> $priceSpecification
* @property array<int, Organization|Person> $seller
* @property array<int, string> $serialNumber
* @property array<int, string> $sku
* @property array<int, DateTime> $validFrom
* @property array<int, DateTime> $validThrough
* @property array<int, WarrantyPromise> $warranty
*/
class Demand extends Base
{
    use DaftObjectTraits\IsOfferOrDemand;
    use DaftObjectTraits\HasItemCondition;
    use DaftObjectTraits\HasMpn;

    const SCHEMA_ORG_TYPE = 'Demand';

    const PROPERTIES = [
        'acceptedPaymentMethod',
        'advanceBookingRequirement',
        'areaServed',
        'availability',
        'availabilityEnds',
        'availabilityStarts',
        'availableAtOrFrom',
        'availableDeliveryMethod',
        'businessFunction',
        'deliveryLeadTime',
        'eligibleCustomerType',
        'eligibleDuration',
        'eligibleQuantity',
        'eligibleRegion',
        'eligibleTransactionVolume',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'includesObject',
        'ineligibleRegion',
        'inventoryLevel',
        'itemCondition',
        'itemOffered',
        'mpn',
        'priceSpecification',
        'seller',
        'serialNumber',
        'sku',
        'validFrom',
        'validThrough',
        'warranty',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'acceptedPaymentMethod' => [
            LoanOrCredit::class,
            PaymentMethod::class,
        ],
        'advanceBookingRequirement' => [
            QuantitativeValue::class,
        ],
        'areaServed' => [
            'string',
            AdministrativeArea::class,
            GeoShape::class,
            Place::class,
        ],
        'availability' => [
            ItemAvailability::class,
        ],
        'availabilityEnds' => [
            DateTime::class,
        ],
        'availabilityStarts' => [
            DateTime::class,
        ],
        'availableAtOrFrom' => [
            Place::class,
        ],
        'availableDeliveryMethod' => [
            DeliveryMethod::class,
        ],
        'businessFunction' => [
            BusinessFunction::class,
        ],
        'deliveryLeadTime' => TypeUtilities::MULTI_TYPE_DICT__deliveryLeadTime,
        'eligibleCustomerType' => TypeUtilities::MULTI_TYPE_DICT__eligibleCustomerType,
        'eligibleDuration' => TypeUtilities::MULTI_TYPE_DICT__eligibleDuration,
        'eligibleQuantity' => TypeUtilities::MULTI_TYPE_DICT__eligibleQuantity,
        'eligibleRegion' => TypeUtilities::MULTI_TYPE_DICT__eligibleRegion,
        'eligibleTransactionVolume' => TypeUtilities::MULTI_TYPE_DICT__eligibleTransactionVolume,
        'gtin8' => TypeUtilities::MULTI_TYPE_DICT__gtin8,
        'gtin12' => TypeUtilities::MULTI_TYPE_DICT__gtin12,
        'gtin13' => TypeUtilities::MULTI_TYPE_DICT__gtin13,
        'gtin14' => TypeUtilities::MULTI_TYPE_DICT__gtin14,
        'includesObject' => TypeUtilities::MULTI_TYPE_DICT__includesObject,
        'ineligibleRegion' => TypeUtilities::MULTI_TYPE_DICT__ineligibleRegion,
        'inventoryLevel' => TypeUtilities::MULTI_TYPE_DICT__inventoryLevel,
        'itemCondition' => TypeUtilities::MULTI_TYPE_DICT__itemCondition,
        'itemOffered' => TypeUtilities::MULTI_TYPE_DICT__itemOffered,
        'mpn' => TypeUtilities::MULTI_TYPE_DICT__mpn,
        'priceSpecification' => [
            PriceSpecification::class,
        ],
        'seller' => [
            Organization::class,
            Person::class,
        ],
        'serialNumber' => [
            'string',
        ],
        'sku' => [
            'string',
        ],
        'validFrom' => [
            DateTime::class,
        ],
        'validThrough' => [
            DateTime::class,
        ],
        'warranty' => [
            WarrantyPromise::class,
        ],
    ];
}
