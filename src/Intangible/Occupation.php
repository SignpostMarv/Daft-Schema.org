<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $educationRequirements
* @property array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|StructuredValue\PriceSpecification> $estimatedSalary
* @property array<int, string> $experienceRequirements
* @property array<int, AdministrativeArea> $occupationLocation
* @property array<int, string> $occupationalCategory
* @property array<int, string> $qualifications
* @property array<int, string> $responsibilities
* @property array<int, string> $skills
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'educationRequirements' => [
            'string',
        ],
        'estimatedSalary' => [
            'integer',
            'double',
            StructuredValue\MonetaryAmount::class,
            StructuredValue\QuantitativeValue\MonetaryAmountDistribution::class,
            StructuredValue\PriceSpecification::class,
        ],
        'experienceRequirements' => [
            'string',
        ],
        'occupationLocation' => [
            AdministrativeArea::class,
        ],
        'occupationalCategory' => [
            'string',
        ],
        'qualifications' => [
            'string',
        ],
        'responsibilities' => [
            'string',
        ],
        'skills' => [
            'string',
        ],
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
        $this->NudgePropertyValue(
            'educationRequirements',
            $value,
            true
        );
    }

    /**
    * @return array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|StructuredValue\PriceSpecification>
    */
    public function GetEstimatedSalary() : array
    {
        /**
        * @var array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|StructuredValue\PriceSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'estimatedSalary',
            $this->RetrievePropertyValueFromData('estimatedSalary'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|float|StructuredValue\MonetaryAmount|StructuredValue\QuantitativeValue\MonetaryAmountDistribution|StructuredValue\PriceSpecification> $value
    */
    public function SetEstimatedSalary(array $value) : void
    {
        $this->NudgePropertyValue(
            'estimatedSalary',
            $value
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
        $this->NudgePropertyValue(
            'experienceRequirements',
            $value,
            true
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
        $this->NudgePropertyValue(
            'occupationLocation',
            $value
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
        $this->NudgePropertyValue(
            'occupationalCategory',
            $value,
            true
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
        $this->NudgePropertyValue(
            'qualifications',
            $value,
            true
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
        $this->NudgePropertyValue(
            'responsibilities',
            $value,
            true
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
        $this->NudgePropertyValue(
            'skills',
            $value,
            true
        );
    }
}
