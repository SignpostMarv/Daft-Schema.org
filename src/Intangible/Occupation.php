<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;
use SignpostMarv\DaftObject\SchemaOrg\PriceSpecification;
use SignpostMarv\DaftObject\TypeUtilities;

class Occupation extends Base
{
    const SCHEMA_ORG_TYPE = 'Occupation';

    const PROPERTIES = [
        'educationRequirements',
        'estimatedSalary',
        'experienceRequirements',
        'occupationLocation',
        'occupationalCategory',
        'qualifications',
        'responsibilities',
        'skills',
    ];

    /**
    * @return array<int, string>
    */
    public function GetEducationRequirements() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'educationRequirements',
            $this->RetrievePropertyValueFromData('educationRequirements'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEducationRequirements(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'educationRequirements',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|PriceSpecification>
    */
    public function GetEstimatedSalary() : array
    {
        /**
        * @var array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|PriceSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'estimatedSalary',
            $this->RetrievePropertyValueFromData('estimatedSalary'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|PriceSpecification> $value
    */
    public function SetEstimatedSalary(array $value) : void
    {
        $this->NudgePropertyWithUniqueNumericsOrThings(
            'estimatedSalary',
            __METHOD__,
            $value,
            StructuredValue\MonetaryAmount::class,
            StructuredValue\QuantitativeValue\MonetaryAmountDistribution::class,
            PriceSpecification::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetExperienceRequirements() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'experienceRequirements',
            $this->RetrievePropertyValueFromData('experienceRequirements'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetExperienceRequirements(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'experienceRequirements',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, AdministrativeArea>
    */
    public function GetOccupationLocation() : array
    {
        /**
        * @var array<int, AdministrativeArea>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'occupationLocation',
            $this->RetrievePropertyValueFromData('occupationLocation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, AdministrativeArea> $value
    */
    public function SetOccupationLocation(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'occupationLocation',
            __METHOD__,
            $value,
            AdministrativeArea::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetOccupationalCategory() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'occupationalCategory',
            $this->RetrievePropertyValueFromData('occupationalCategory'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetOccupationalCategory(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'occupationalCategory',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetQualifications() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'qualifications',
            $this->RetrievePropertyValueFromData('qualifications'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetQualifications(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'qualifications',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetResponsibilities() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'responsibilities',
            $this->RetrievePropertyValueFromData('responsibilities'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetResponsibilities(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'responsibilities',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSkills() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'skills',
            $this->RetrievePropertyValueFromData('skills'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSkills(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'skills',
            __METHOD__,
            $value
        );
    }
}
