<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasIsAccessibleForFree
{
    use DaftObjectTrait;

    /**
    * @return array<int, bool>
    */
    public function GetIsAccessibleForFree() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isAccessibleForFree',
            $this->RetrievePropertyValueFromData('isAccessibleForFree'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetIsAccessibleForFree(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'isAccessibleForFree',
            $value
        );
    }
}
