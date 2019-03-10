<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Service;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait IsRelatedOrSimilarTo
{
    use DaftObjectTrait;

    /**
    * @return array<int, Product|Service>
    */
    public function GetIsRelatedTo() : array
    {
        /**
        * @var array<int, Product|Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isRelatedTo',
            $this->RetrievePropertyValueFromData('isRelatedTo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product|Service> $value
    */
    public function SetIsRelatedTo(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'isRelatedTo',
            __METHOD__,
            $value,
            Product::class,
            Service::class
        );
    }

    /**
    * @return array<int, Product|Service>
    */
    public function GetIsSimilarTo() : array
    {
        /**
        * @var array<int, Product|Service>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isSimilarTo',
            $this->RetrievePropertyValueFromData('isSimilarTo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Product|Service> $value
    */
    public function SetIsSimilarTo(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'isSimilarTo',
            __METHOD__,
            $value,
            Product::class,
            Service::class
        );
    }
}
