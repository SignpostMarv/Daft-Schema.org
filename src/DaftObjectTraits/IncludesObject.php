<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\TypeAndQuantityNode;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'includesObject',
            __METHOD__,
            $value,
            TypeAndQuantityNode::class
        );
    }
}
