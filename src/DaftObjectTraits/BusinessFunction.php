<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\BusinessFunction as Type;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait BusinessFunction
{
    use DaftObjectTrait;

    /**
    * @return array<int, Type>
    */
    public function GetBusinessFunction() : array
    {
        /**
        * @var array<int, Type>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'businessFunction',
            $this->RetrievePropertyValueFromData('businessFunction'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Type> $value
    */
    public function SetBusinessFunction(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'businessFunction',
            __METHOD__,
            $value,
            Type::class
        );
    }
}
