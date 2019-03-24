<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\SoftwareApplication;
use SignpostMarv\DaftObject\SchemaOrg\Intangible;
use SignpostMarv\DaftObject\SchemaOrg\Thing;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, SoftwareApplication> $actionApplication
* @property array<int, string> $actionPlatform
* @property array<int, string> $contentType
* @property array<int, string> $encodingType
* @property array<int, string> $httpMethod
* @property array<int, string> $urlTemplate
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'actionApplication' => [
            SoftwareApplication::class,
        ],
        'actionPlatform' => [
            'string',
        ],
        'contentType' => [
            'string',
        ],
        'encodingType' => [
            'string',
        ],
        'httpMethod' => [
            'string',
        ],
        'urlTemplate' => [
            'string',
        ],
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
        $this->NudgePropertyValue(
            'actionApplication',
            $value
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
        $this->NudgePropertyValue(
            'actionPlatform',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
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
        $this->NudgePropertyValue(
            'contentType',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
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
        $this->NudgePropertyValue(
            'encodingType',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
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
        $this->NudgePropertyValue(
            'httpMethod',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
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
        $this->NudgePropertyValue(
            'urlTemplate',
            $value,
            Thing::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
