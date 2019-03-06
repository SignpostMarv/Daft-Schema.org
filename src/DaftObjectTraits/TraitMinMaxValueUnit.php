<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait TraitMinMaxValueUnit
{
    use DaftObjectTrait;
    use HasMinMaxValue;
    use HasUnitCodeText;

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
