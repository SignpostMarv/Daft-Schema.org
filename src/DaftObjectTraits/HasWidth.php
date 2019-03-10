<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Distance;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasWidth
{
    use DaftObjectTrait;

    /**
    * @return array<int, Distance|QuantitativeValue>
    */
    public function GetWidth() : array
    {
        /**
        * @var array<int, Distance|QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'width',
            $this->RetrievePropertyValueFromData('width'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Distance|QuantitativeValue> $value
    */
    public function SetWidth(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'width',
            __METHOD__,
            $value,
            Distance::class,
            QuantitativeValue::class
        );
    }
}
