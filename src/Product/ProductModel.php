<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Product;

use SignpostMarv\DaftObject\SchemaOrg\Product as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class ProductModel extends Base
{
    const SCHEMA_ORG_TYPE = 'ProductModel';

    const PROPERTIES = [
        'isVariantOf',
        'predecessorOf',
        'successorOf',
    ];

    /**
    * @return array<int, ProductModel>
    */
    public function GetIsVariantOf() : array
    {
        /**
        * @var array<int, ProductModel>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isVariantOf',
            $this->RetrievePropertyValueFromData('isVariantOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ProductModel> $value
    */
    public function SetIsVariantOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'isVariantOf',
            __METHOD__,
            $value,
            ProductModel::class
        );
    }

    /**
    * @return array<int, ProductModel>
    */
    public function GetPredecessorOf() : array
    {
        /**
        * @var array<int, ProductModel>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'predecessorOf',
            $this->RetrievePropertyValueFromData('predecessorOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ProductModel> $value
    */
    public function SetPredecessorOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'predecessorOf',
            __METHOD__,
            $value,
            ProductModel::class
        );
    }

    /**
    * @return array<int, ProductModel>
    */
    public function GetSuccessorOf() : array
    {
        /**
        * @var array<int, ProductModel>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'successorOf',
            $this->RetrievePropertyValueFromData('successorOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ProductModel> $value
    */
    public function SetSuccessorOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'successorOf',
            __METHOD__,
            $value,
            ProductModel::class
        );
    }
}
