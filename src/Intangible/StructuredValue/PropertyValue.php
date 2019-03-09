<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\TypeUtilities;

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
        'measurementTechnique' => [
            'string',
        ],
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
        'valueReference' => [
            Enumeration::class,
            self::class,
            Enumeration\QualitativeValue::class,
            QuantitativeValue::class,
            Base::class,
        ],
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
            true
        );
    }
}
