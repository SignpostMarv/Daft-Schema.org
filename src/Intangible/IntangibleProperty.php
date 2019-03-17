<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitSupersededBy;
use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Base> $domainIncludes
* @property array<int, IntangibleProperty> $inverseOf
* @property array<int, Base> $rangeIncludes
* @property array<int, IntangibleClass|Enumeration|IntangibleProperty> $supersededBy
*/
class IntangibleProperty extends Base
{
    use TraitSupersededBy;

    const SCHEMA_ORG_TYPE = 'Property';

    const PROPERTIES = [
        'domainIncludes',
        'inverseOf',
        'rangeIncludes',
        'supersededBy',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'domainIncludes' => [
            Base::class,
        ],
        'inverseOf' => [
            IntangibleProperty::class,
        ],
        'rangeIncludes' => [
            Base::class,
        ],
        'supersededBy' => [
            IntangibleClass::class,
            Enumeration::class,
            IntangibleProperty::class,
        ],
    ];

    /**
    * @return array<int, Base>
    */
    public function GetDomainIncludes() : array
    {
        /**
        * @var array<int, Base>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'domainIncludes',
            $this->RetrievePropertyValueFromData('domainIncludes'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Base> $value
    */
    public function SetDomainIncludes(array $value) : void
    {
        $this->NudgePropertyValue(
            'domainIncludes',
            $value
        );
    }

    /**
    * @return array<int, IntangibleProperty>
    */
    public function GetInverseOf() : array
    {
        /**
        * @var array<int, IntangibleProperty>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'inverseOf',
            $this->RetrievePropertyValueFromData('inverseOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, IntangibleProperty> $value
    */
    public function SetInverseOf(array $value) : void
    {
        $this->NudgePropertyValue(
            'inverseOf',
            $value
        );
    }

    /**
    * @return array<int, Base>
    */
    public function GetRangeIncludes() : array
    {
        /**
        * @var array<int, Base>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'rangeIncludes',
            $this->RetrievePropertyValueFromData('rangeIncludes'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Base> $value
    */
    public function SetRangeIncludes(array $value) : void
    {
        $this->NudgePropertyValue(
            'rangeIncludes',
            $value
        );
    }
}
