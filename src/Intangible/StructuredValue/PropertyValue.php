<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\QualitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, int|float> $maxValue
* @property array<int, string> $measurementTechnique
* @property array<int, int|float> $minValue
* @property array<int, string> $propertyID
* @property array<int, string> $unitCode
* @property array<int, string> $unitText
* @property array<int, bool|int|float|string|PropertyValue> $value
* @property array<int, QualitativeValue|Enumeration|PropertyValue|QuantitativeValue|Base> $valueReference
*/
class PropertyValue extends Base
{
    use DaftObjectTraits\MeasurementTechnique;
    use DaftObjectTraits\TraitMinMaxValueUnit;
    use DaftObjectTraits\TraitValueReference;

    const SCHEMA_ORG_TYPE = 'PropertyValue';

    const PROPERTIES = [
        'maxValue',
        'measurementTechnique',
        'minValue',
        'propertyID',
        'unitCode',
        'unitText',
        'value',
        'valueReference',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'maxValue' => [
            'integer',
            'double',
        ],
        'measurementTechnique' => TypeUtilities::MULTI_TYPE_DICT__measurementTechnique,
        'minValue' => [
            'integer',
            'double',
        ],
        'propertyID' => [
            'string',
        ],
        'unitCode' => [
            'string',
        ],
        'unitText' => [
            'string',
        ],
        'value' => [
            'boolean',
            'integer',
            'double',
            'string',
            Base::class,
        ],
        'valueReference' => TypeUtilities::MULTI_TYPE_DICT__valueReference,
    ];

    /**
    * @return array<int, string>
    */
    public function GetPropertyID() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'propertyID',
            $this->RetrievePropertyValueFromData('propertyID'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPropertyID(array $value) : void
    {
        $this->NudgePropertyValue(
            'propertyID',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
