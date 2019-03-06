<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\ContactPointOption;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\Product;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'contactOption',
            __METHOD__,
            $value,
            ContactPointOption::class
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'contactType',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'productSupported',
            __METHOD__,
            $value,
            Product::class
        );
    }
}
