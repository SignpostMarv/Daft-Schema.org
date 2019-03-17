<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\GeoShape;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ContactPointOption;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Language;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string|AdministrativeArea|GeoShape|Place> $areaServed
* @property array<int, string|Language> $availableLanguage
* @property array<int, ContactPointOption> $contactOption
* @property array<int, string> $contactType
* @property array<int, string> $email
* @property array<int, string> $faxNumber
* @property array<int, OpeningHoursSpecification> $hoursAvailable
* @property array<int, string|Product> $productSupported
* @property array<int, string> $telephone
*/
class ContactPoint extends Base
{
    use DaftObjectTraits\HasAreaServed;
    use DaftObjectTraits\AvailableLanguage;
    use DaftObjectTraits\HasEmail;
    use DaftObjectTraits\HasFaxNumber;
    use DaftObjectTraits\HasHoursAvailable;
    use DaftObjectTraits\HasTelephone;

    const SCHEMA_ORG_TYPE = 'ContactPoint';

    const PROPERTIES = [
        'areaServed',
        'availableLanguage',
        'contactOption',
        'contactType',
        'email',
        'faxNumber',
        'hoursAvailable',
        'productSupported',
        'telephone',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'areaServed' => [
            'string',
            AdministrativeArea::class,
            GeoShape::class,
            Place::class,
        ],
        'availableLanguage' => [
            'string',
            Language::class,
        ],
        'contactOption' => [
            ContactPointOption::class,
        ],
        'contactType' => [
            'string',
        ],
        'email' => [
            'string',
        ],
        'faxNumber' => [
            'string',
        ],
        'hoursAvailable' => [
            OpeningHoursSpecification::class,
        ],
        'productSupported' => [
            'string',
            Product::class,
        ],
        'telephone' => [
            'string',
        ],
    ];

    /**
    * @return array<int, ContactPointOption>
    */
    public function GetContactOption() : array
    {
        /**
        * @var array<int, ContactPointOption>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contactOption',
            $this->RetrievePropertyValueFromData('contactOption'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ContactPointOption> $value
    */
    public function SetContactOption(array $value) : void
    {
        $this->NudgePropertyValue(
            'contactOption',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetContactType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contactType',
            $this->RetrievePropertyValueFromData('contactType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetContactType(array $value) : void
    {
        $this->NudgePropertyValue(
            'contactType',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|Product>
    */
    public function GetProductSupported() : array
    {
        /**
        * @var array<int, string|Product>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'productSupported',
            $this->RetrievePropertyValueFromData('productSupported'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Product> $value
    */
    public function SetProductSupported(array $value) : void
    {
        $this->NudgePropertyValue(
            'productSupported',
            $value,
            true
        );
    }
}
