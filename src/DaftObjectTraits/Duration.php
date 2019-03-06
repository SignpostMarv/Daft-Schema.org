<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Duration as Type;
use SignpostMarv\DaftObject\TypeUtilities;

trait Duration
{
    use DaftObjectTrait;

    /**
    * @return array<int, Type>
    */
    public function GetDuration() : array
    {
        /**
        * @var array<int, Type>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'duration',
            $this->RetrievePropertyValueFromData('duration'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Type> $value
    */
    public function SetDuration(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'duration',
            __METHOD__,
            $value,
            Type::class
        );
    }
}
