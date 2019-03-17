<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\IntangibleClass;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\IntangibleProperty;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait TraitSupersededBy
{
    use DaftObjectTrait;

    /**
    * @return array<int, IntangibleClass|Enumeration|IntangibleProperty>
    */
    public function GetSupersededBy() : array
    {
        /**
        * @var array<int, IntangibleClass|Enumeration|IntangibleProperty>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'supersededBy',
            $this->RetrievePropertyValueFromData('supersededBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, IntangibleClass|Enumeration|IntangibleProperty> $value
    */
    public function SetSupersededBy(array $value) : void
    {
        $this->NudgePropertyValue(
            'supersededBy',
            $value
        );
    }
}
