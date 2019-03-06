<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitAdditionalProperty;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits\TraitValueReference;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration;
use SignpostMarv\DaftObject\TypeUtilities;

class QualitativeValue extends Enumeration
{
    use TraitAdditionalProperty;
    use TraitValueReference;

    const SCHEMA_ORG_TYPE = 'QualitativeValue';

    const PROPERTIES = [
        'additionalProperty',
        'equal',
        'greater',
        'greaterOrEqual',
        'lesser',
        'lesserOrEqual',
        'nonEqual',
        'valueReference',
    ];

    /**
    * @return array<int, QualitativeValue>
    */
    public function GetEqual() : array
    {
        /**
        * @var array<int, QualitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'equal',
            $this->RetrievePropertyValueFromData('equal'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    public function SetEqual(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfQualitativeValue('equal', __METHOD__, $value);
    }

    /**
    * @return array<int, QualitativeValue>
    */
    public function GetGreater() : array
    {
        /**
        * @var array<int, QualitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'greater',
            $this->RetrievePropertyValueFromData('greater'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    public function SetGreater(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfQualitativeValue('greater', __METHOD__, $value);
    }

    /**
    * @return array<int, QualitativeValue>
    */
    public function GetGreaterOrEqual() : array
    {
        /**
        * @var array<int, QualitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'greaterOrEqual',
            $this->RetrievePropertyValueFromData('greaterOrEqual'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    public function SetGreaterOrEqual(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfQualitativeValue(
            'greaterOrEqual',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, QualitativeValue>
    */
    public function GetLesser() : array
    {
        /**
        * @var array<int, QualitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'lesser',
            $this->RetrievePropertyValueFromData('lesser'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    public function SetLesser(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfQualitativeValue('lesser', __METHOD__, $value);
    }

    /**
    * @return array<int, QualitativeValue>
    */
    public function GetLesserOrEqual() : array
    {
        /**
        * @var array<int, QualitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'lesserOrEqual',
            $this->RetrievePropertyValueFromData('lesserOrEqual'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    public function SetLesserOrEqual(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfQualitativeValue(
            'lesserOrEqual',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, QualitativeValue>
    */
    public function GetNonEqual() : array
    {
        /**
        * @var array<int, QualitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'nonEqual',
            $this->RetrievePropertyValueFromData('nonEqual'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    public function SetNonEqual(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfQualitativeValue('nonEqual', __METHOD__, $value);
    }

    /**
    * @param array<int, QualitativeValue> $value
    */
    protected function NudgePropertyWithUniqueValuesOfQualitativeValue(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            $method,
            $value,
            QualitativeValue::class
        );
    }
}
