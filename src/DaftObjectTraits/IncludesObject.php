<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\TypeAndQuantityNode;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait IncludesObject
{
    use DaftObjectTrait;

    /**
    * @return array<int, TypeAndQuantityNode>
    */
    public function GetIncludesObject() : array
    {
        /**
        * @var array<int, TypeAndQuantityNode>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'includesObject',
            $this->RetrievePropertyValueFromData('includesObject'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, TypeAndQuantityNode> $value
    */
    public function SetIncludesObject(array $value) : void
    {
        $this->NudgePropertyValue(
            'includesObject',
            $value
        );
    }
}
