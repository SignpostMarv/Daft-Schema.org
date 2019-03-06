<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Distance;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\TypeUtilities;

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

    /**
    * @return array<int, string>
    */
    public function GetColor() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'color',
            $this->RetrievePropertyValueFromData('color'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetColor(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'color',
            __METHOD__,
            $value
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'depth',
            $this->RetrievePropertyValueFromData('depth'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Distance|QuantitativeValue> $value
    */
    public function SetDepth(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'depth',
            __METHOD__,
            $value,
            Distance::class,
            QuantitativeValue::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isAccessoryOrSparePartFor',
            $this->RetrievePropertyValueFromData('isAccessoryOrSparePartFor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product> $value
    */
    public function SetIsAccessoryOrSparePartFor(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'isAccessoryOrSparePartFor',
            __METHOD__,
            $value,
            Product::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isConsumableFor',
            $this->RetrievePropertyValueFromData('isConsumableFor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product> $value
    */
    public function SetIsConsumableFor(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'isConsumableFor',
            __METHOD__,
            $value,
            Product::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'manufacturer',
            $this->RetrievePropertyValueFromData('manufacturer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetManufacturer(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'manufacturer',
            __METHOD__,
            $value,
            Organization::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'model',
            $this->RetrievePropertyValueFromData('model'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product\ProductModel> $value
    */
    public function SetModel(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'model',
            __METHOD__,
            $value,
            Product\ProductModel::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'productID',
            $this->RetrievePropertyValueFromData('productID'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetProductID(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'productID',
            __METHOD__,
            $value
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'productionDate',
            $this->RetrievePropertyValueFromData('productionDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date> $value
    */
    public function SetProductionDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'productionDate',
            __METHOD__,
            $value,
            DataTypes\Date::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'purchaseDate',
            $this->RetrievePropertyValueFromData('purchaseDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date> $value
    */
    public function SetPurchaseDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'purchaseDate',
            __METHOD__,
            $value,
            DataTypes\Date::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ReleaseDate',
            $this->RetrievePropertyValueFromData('ReleaseDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Date> $value
    */
    public function SetReleaseDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'ReleaseDate',
            __METHOD__,
            $value,
            DataTypes\Date::class
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
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'weight',
            $this->RetrievePropertyValueFromData('weight'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetWeight(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'weight',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }
}
