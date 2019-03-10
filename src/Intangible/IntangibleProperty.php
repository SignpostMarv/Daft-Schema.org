<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitSupersededBy;
use SignpostMarv\DaftObject\SchemaOrg\Intangible;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class IntangibleProperty extends Intangible
{
    use TraitSupersededBy;

    const SCHEMA_ORG_TYPE = 'Property';

    const PROPERTIES = [
        'domainIncludes',
        'inverseOf',
        'rangeIncludes',
        'supersededBy',
    ];

    /**
    * @return array<int, IntangibleClass>
    */
    public function GetDomainIncludes() : array
    {
        /**
        * @var array<int, IntangibleClass>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'domainIncludes',
            $this->RetrievePropertyValueFromData('domainIncludes'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, IntangibleClass> $value
    */
    public function SetDomainIncludes(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'domainIncludes',
            __METHOD__,
            $value,
            IntangibleClass::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'inverseOf',
            __METHOD__,
            $value,
            IntangibleProperty::class
        );
    }

    /**
    * @return array<int, IntangibleClass>
    */
    public function GetRangeIncludes() : array
    {
        /**
        * @var array<int, IntangibleClass>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'rangeIncludes',
            $this->RetrievePropertyValueFromData('rangeIncludes'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, IntangibleClass> $value
    */
    public function SetRangeIncludes(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'rangeIncludes',
            __METHOD__,
            $value,
            IntangibleClass::class
        );
    }
}
