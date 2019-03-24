<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait MeasurementTechnique
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetMeasurementTechnique() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'measurementTechnique',
            $this->RetrievePropertyValueFromData('measurementTechnique'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetMeasurementTechnique(array $value) : void
    {
        $this->NudgePropertyValue(
            'measurementTechnique',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
