<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Trip;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasHasPart
{
    use DaftObjectTrait;

    /**
    * @return array<int, CreativeWork|Trip>
    */
    public function GetHasPart() : array
    {
        /**
        * @var array<int, CreativeWork|Trip>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hasPart',
            $this->RetrievePropertyValueFromData('hasPart'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork|Trip> $value
    */
    public function SetHasPart(array $value) : void
    {
        $this->NudgePropertyValue(
            'hasPart',
            $value
        );
    }

    /**
    * @return array<int, CreativeWork|Trip>
    */
    public function GetIsPartOf() : array
    {
        /**
        * @var array<int, CreativeWork|Trip>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isPartOf',
            $this->RetrievePropertyValueFromData('isPartOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork|Trip> $value
    */
    public function SetIsPartOf(array $value) : void
    {
        $this->NudgePropertyValue(
            'isPartOf',
            $value
        );
    }
}
