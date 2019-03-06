<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;
use SignpostMarv\DaftObject\TypeUtilities;

class PropertyValue extends StructuredValue
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

    /**
    * @return array<int, string>
    */
    public function GetPropertyID() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'propertyId',
            $this->RetrievePropertyValueFromData('propertyId'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPropertyID(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'propertyId',
            __METHOD__,
            $value
        );
    }
}
