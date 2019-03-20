<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait Weight
{
    use DaftObjectTrait;

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetWeight() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = $this->ExpectRetrievedValueIsArray('weight');

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetWeight(array $value) : void
    {
        $this->NudgePropertyValue('weight', $value);
    }
}
