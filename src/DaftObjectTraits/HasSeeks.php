<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Demand;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasSeeks
{
    use DaftObjectTrait;

    /**
    * @return array<int, Demand>
    */
    public function GetSeeks() : array
    {
        /**
        * @var array<int, Demand>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'seeks',
            $this->RetrievePropertyValueFromData('seeks'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Demand> $value
    */
    public function SetSeeks(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'seeks',
            __METHOD__,
            $value,
            Demand::class
        );
    }
}
