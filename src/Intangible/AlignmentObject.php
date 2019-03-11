<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $alignmentType
* @property array<int, string> $educationalFramework
* @property array<int, string> $targetDescription
* @property array<int, string> $targetName
* @property array<int, string> $targetUrl
*/
class AlignmentObject extends Base
{
    const SCHEMA_ORG_TYPE = 'AlignmentObject';

    const PROPERTIES = [
        'alignmentType',
        'educationalFramework',
        'targetDescription',
        'targetName',
        'targetUrl',
    ];

    /**
    * @return array<int, string>
    */
    public function GetAlignmentType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'alignmentType',
            $this->RetrievePropertyValueFromData('alignmentType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAlignmentType(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'alignmentType',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetEducationalFramework() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'educationalFramework',
            $this->RetrievePropertyValueFromData('educationalFramework'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEducationalFramework(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'educationalFramework',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetTargetDescription() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'targetDescription',
            $this->RetrievePropertyValueFromData('targetDescription'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTargetDescription(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'targetDescription',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetTargetName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'targetName',
            $this->RetrievePropertyValueFromData('targetName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTargetName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'targetName',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetTargetUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'targetUrl',
            $this->RetrievePropertyValueFromData('targetUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetTargetUrl(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'targetUrl',
            __METHOD__,
            $value
        );
    }
}
