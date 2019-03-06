<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\SoftwareApplication;
use SignpostMarv\DaftObject\SchemaOrg\Intangible;
use SignpostMarv\DaftObject\TypeUtilities;

class EntryPoint extends Intangible
{
    const SCHEMA_ORG_TYPE = 'EntryPoint';

    const PROPERTIES = [
        'actionApplication',
        'actionPlatform',
        'contentType',
        'encodingType',
        'httpMethod',
        'urlTemplate',
    ];

    /**
    * @return array<int, SoftwareApplication>
    */
    public function GetActionApplication() : array
    {
        /**
        * @var array<int, SoftwareApplication>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'actionApplication',
            $this->RetrievePropertyValueFromData('actionApplication'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, SoftwareApplication> $value
    */
    public function SetActionApplication(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'actionApplication',
            __METHOD__,
            $value,
            SoftwareApplication::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetActionPlatform() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'actionPlatform',
            $this->RetrievePropertyValueFromData('actionPlatform'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetActionPlatform(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'actionPlatform',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetContentType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contentType',
            $this->RetrievePropertyValueFromData('contentType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetContentType(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'contentType',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetEncodingType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'encodingType',
            $this->RetrievePropertyValueFromData('encodingType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEncodingType(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'encodingType',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetHttpMethod() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'httpMethod',
            $this->RetrievePropertyValueFromData('httpMethod'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetHttpMethod(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'httpMethod',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetUrlTemplate() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'urlTemplate',
            $this->RetrievePropertyValueFromData('urlTemplate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetUrlTemplate(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'urlTemplate',
            __METHOD__,
            $value
        );
    }
}
