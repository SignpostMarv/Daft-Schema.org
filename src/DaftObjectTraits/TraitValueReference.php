<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\QualitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\TypeUtilities;

trait TraitValueReference
{
    use DaftObjectTrait;

    /**
    * @return array<int, Enumeration|PropertyValue|QualitativeValue|\SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue|StructuredValue>
    */
    public function GetValueReference() : array
    {
        /**
        * @var array<int, Enumeration|PropertyValue|QualitativeValue|\SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue|StructuredValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'valueReference',
            $this->RetrievePropertyValueFromData('valueReference'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Enumeration|PropertyValue|QualitativeValue|\SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue|StructuredValue> $value
    */
    public function SetValueReference(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'valueReference',
            __METHOD__,
            $value,
            QuantitativeValue::class,
            QualitativeValue::class,
            Enumeration::class,
            PropertyValue::class,
            StructuredValue::class
        );
    }
}
