<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Brand;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\OfferItemCondition;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\PhysicalActivityCategory;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Distance;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;

/**
* @property array<int, PropertyValue> $additionalProperty
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, Audience> $audience
* @property array<int, string> $award
* @property array<int, Brand|Organization> $brand
* @property array<int, string|Thing|PhysicalActivityCategory> $category
* @property array<int, string> $color
* @property array<int, Distance|QuantitativeValue> $depth
* @property array<int, string> $gtin12
* @property array<int, string> $gtin13
* @property array<int, string> $gtin14
* @property array<int, string> $gtin8
* @property array<int, Distance|QuantitativeValue> $height
* @property array<int, Product> $isAccessoryOrSparePartFor
* @property array<int, Product> $isConsumableFor
* @property array<int, Product|Service> $isRelatedTo
* @property array<int, Product|Service> $isSimilarTo
* @property array<int, OfferItemCondition> $itemCondition
* @property array<int, ImageObject> $logo
* @property array<int, Organization> $manufacturer
* @property array<int, string|Product> $material
* @property array<int, string|Product\ProductModel> $model
* @property array<int, string> $mpn
* @property array<int, Offer> $offers
* @property array<int, string> $productID
* @property array<int, DataTypes\Date> $productionDate
* @property array<int, DataTypes\Date> $purchaseDate
* @property array<int, DataTypes\Date> $releaseDate
* @property array<int, Review> $review
* @property array<int, string> $sku
* @property array<int, QuantitativeValue> $weight
* @property array<int, Distance|QuantitativeValue> $width
*/
class Product extends Thing
{
    use DaftObjectTraits\TraitAdditionalProperty;
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasAudience;
    use DaftObjectTraits\HasAward;
    use DaftObjectTraits\HasBrand;
    use DaftObjectTraits\HasCategory;
    use DaftObjectTraits\HasGtin;
    use DaftObjectTraits\HasHeights;
    use DaftObjectTraits\HasItemCondition;
    use DaftObjectTraits\HasLogo;
    use DaftObjectTraits\IsRelatedOrSimilarTo;
    use DaftObjectTraits\HasMaterial;
    use DaftObjectTraits\HasMpn;
    use DaftObjectTraits\HasOffers;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\HasSku;
    use DaftObjectTraits\HasWidth;

    const SCHEMA_ORG_TYPE = 'Product';

    const PROPERTIES = [
        'additionalProperty',
        'aggregateRating',
        'audience',
        'award',
        'brand',
        'category',
        'color',
        'depth',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'height',
        'isAccessoryOrSparePartFor',
        'isConsumableFor',
        'isRelatedTo',
        'isSimilarTo',
        'itemCondition',
        'logo',
        'manufacturer',
        'material',
        'model',
        'mpn',
        'offers',
        'productID',
        'productionDate',
        'purchaseDate',
        'releaseDate',
        'review',
        'sku',
        'weight',
        'width',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'additionalProperty' => [
            PropertyValue::class,
        ],
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'audience' => [
            Audience::class,
        ],
        'award' => [
            'string',
        ],
        'brand' => [
            Brand::class,
            Organization::class,
        ],
        'category' => [
            'string',
            Thing::class,
            PhysicalActivityCategory::class,
        ],
        'color' => [
            'string',
        ],
        'depth' => [
            Distance::class,
            QuantitativeValue::class,
        ],
        'gtin12' => [
            'string',
        ],
        'gtin13' => [
            'string',
        ],
        'gtin14' => [
            'string',
        ],
        'gtin8' => [
            'string',
        ],
        'height' => [
            Distance::class,
            QuantitativeValue::class,
        ],
        'isAccessoryOrSparePartFor' => [
            Product::class,
        ],
        'isConsumableFor' => [
            Product::class,
        ],
        'isRelatedTo' => [
            Product::class,
            Service::class,
        ],
        'isSimilarTo' => [
            Product::class,
            Service::class,
        ],
        'itemCondition' => [
            OfferItemCondition::class,
        ],
        'logo' => [
            ImageObject::class,
        ],
        'manufacturer' => [
            Organization::class,
        ],
        'material' => [
            'string',
            Product::class,
        ],
        'model' => [
            'string',
            Product\ProductModel::class,
        ],
        'mpn' => [
            'string',
        ],
        'offers' => [
            Offer::class,
        ],
        'productID' => [
            'string',
        ],
        'productionDate' => [
            DataTypes\Date::class,
        ],
        'purchaseDate' => [
            DataTypes\Date::class,
        ],
        'releaseDate' => [
            DataTypes\Date::class,
        ],
        'review' => [
            Review::class,
        ],
        'sku' => [
            'string',
        ],
        'weight' => [
            QuantitativeValue::class,
        ],
        'width' => [
            Distance::class,
            QuantitativeValue::class,
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetColor() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'color'
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetColor(array $value) : void
    {
        $this->NudgePropertyValue(
            'color',
            $value,
            true
        );
    }

    /**
    * @return array<int, Distance|QuantitativeValue>
    */
    public function GetDepth() : array
    {
        /**
        * @var array<int, Distance|QuantitativeValue>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'depth'
        );

        return $out;
    }

    /**
    * @param array<int, Distance|QuantitativeValue> $value
    */
    public function SetDepth(array $value) : void
    {
        $this->NudgePropertyValue(
            'depth',
            $value
        );
    }

    /**
    * @return array<int, Product>
    */
    public function GetIsAccessoryOrSparePartFor() : array
    {
        /**
        * @var array<int, Product>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'isAccessoryOrSparePartFor'
        );

        return $out;
    }

    /**
    * @param array<int, Product> $value
    */
    public function SetIsAccessoryOrSparePartFor(array $value) : void
    {
        $this->NudgePropertyValue(
            'isAccessoryOrSparePartFor',
            $value
        );
    }

    /**
    * @return array<int, Product>
    */
    public function GetIsConsumableFor() : array
    {
        /**
        * @var array<int, Product>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'isConsumableFor'
        );

        return $out;
    }

    /**
    * @param array<int, Product> $value
    */
    public function SetIsConsumableFor(array $value) : void
    {
        $this->NudgePropertyValue(
            'isConsumableFor',
            $value
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetManufacturer() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'manufacturer'
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetManufacturer(array $value) : void
    {
        $this->NudgePropertyValue(
            'manufacturer',
            $value
        );
    }

    /**
    * @return array<int, string|Product\ProductModel>
    */
    public function GetModel() : array
    {
        /**
        * @var array<int, string|Product\ProductModel>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'model'
        );

        return $out;
    }

    /**
    * @param array<int, string|Product\ProductModel> $value
    */
    public function SetModel(array $value) : void
    {
        $this->NudgePropertyValue(
            'model',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetProductID() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'productID'
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetProductID(array $value) : void
    {
        $this->NudgePropertyValue(
            'productID',
            $value,
            true
        );
    }

    /**
    * @return array<int, DataTypes\Date>
    */
    public function GetProductionDate() : array
    {
        /**
        * @var array<int, DataTypes\Date>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'productionDate'
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date> $value
    */
    public function SetProductionDate(array $value) : void
    {
        $this->NudgePropertyValue(
            'productionDate',
            $value
        );
    }

    /**
    * @return array<int, DataTypes\Date>
    */
    public function GetPurchaseDate() : array
    {
        /**
        * @var array<int, DataTypes\Date>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'purchaseDate'
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date> $value
    */
    public function SetPurchaseDate(array $value) : void
    {
        $this->NudgePropertyValue(
            'purchaseDate',
            $value
        );
    }

    /**
    * @return array<int, DataTypes\Date>
    */
    public function GetReleaseDate() : array
    {
        /**
        * @var array<int, DataTypes\Date>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'releaseDate'
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date> $value
    */
    public function SetReleaseDate(array $value) : void
    {
        $this->NudgePropertyValue(
            'releaseDate',
            $value
        );
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetWeight() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = $this->ExpectRetrievedValueIsArray(
            'weight'
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetWeight(array $value) : void
    {
        $this->NudgePropertyValue(
            'weight',
            $value
        );
    }
}
