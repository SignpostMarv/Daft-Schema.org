<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\TypeUtilities;

trait TraitAdditionalProperty
{
    use DaftObjectTrait;

    /**
    * @return array<int, PropertyValue>
    */
    public function GetAdditionalProperty() : array
    {
        /**
        * @var array<int, PropertyValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'additionalProperty',
            $this->RetrievePropertyValueFromData('additionalProperty'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PropertyValue> $value
    */
    public function SetAdditionalProperty(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'additionalProperty',
            __METHOD__,
            $value,
            PropertyValue::class
        );
    }
}
