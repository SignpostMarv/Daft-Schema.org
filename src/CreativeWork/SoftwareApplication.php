<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $applicationCategory
* @property array<int, string> $applicationSubCategory
* @property array<int, string> $applicationSuite
* @property array<int, string> $availableOnDevice
* @property array<int, string> $countriesNotSupported
* @property array<int, string> $countriesSupported
* @property array<int, string> $downloadUrl
* @property array<int, string> $featureList
* @property array<int, string> $fileSize
* @property array<int, string> $installUrl
* @property array<int, string> $memoryRequirements
* @property array<int, string> $operatingSystem
* @property array<int, string> $permissions
* @property array<int, string> $processorRequirements
* @property array<int, string> $releaseNotes
* @property array<int, string|MediaObject\ImageObject> $screenshot
* @property array<int, SoftwareApplication> $softwareAddOn
* @property array<int, Base> $softwareHelp
* @property array<int, string> $softwareRequirements
* @property array<int, string> $softwareVersion
* @property array<int, string> $storageRequirements
* @property array<int, Dataset\DataFeed> $supportingData
*/
class SoftwareApplication extends Base
{
    const SCHEMA_ORG_TYPE = 'SoftwareApplication';

    const PROPERTIES = [
        'applicationCategory',
        'applicationSubCategory',
        'applicationSuite',
        'availableOnDevice',
        'countriesNotSupported',
        'countriesSupported',
        'downloadUrl',
        'featureList',
        'fileSize',
        'installUrl',
        'memoryRequirements',
        'operatingSystem',
        'permissions',
        'processorRequirements',
        'releaseNotes',
        'screenshot',
        'softwareAddOn',
        'softwareHelp',
        'softwareRequirements',
        'softwareVersion',
        'storageRequirements',
        'supportingData',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'applicationCategory' => [
            'string',
        ],
        'applicationSubCategory' => [
            'string',
        ],
        'applicationSuite' => [
            'string',
        ],
        'availableOnDevice' => [
            'string',
        ],
        'countriesNotSupported' => [
            'string',
        ],
        'countriesSupported' => [
            'string',
        ],
        'downloadUrl' => [
            'string',
        ],
        'featureList' => [
            'string',
        ],
        'fileSize' => [
            'string',
        ],
        'installUrl' => [
            'string',
        ],
        'memoryRequirements' => [
            'string',
        ],
        'operatingSystem' => [
            'string',
        ],
        'permissions' => [
            'string',
        ],
        'processorRequirements' => [
            'string',
        ],
        'releaseNotes' => [
            'string',
        ],
        'screenshot' => [
            'string',
            MediaObject\ImageObject::class,
        ],
        'softwareAddOn' => [
            SoftwareApplication::class,
        ],
        'softwareHelp' => [
            Base::class,
        ],
        'softwareRequirements' => [
            'string',
        ],
        'softwareVersion' => [
            'string',
        ],
        'storageRequirements' => [
            'string',
        ],
        'supportingData' => [
            Dataset\DataFeed::class,
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetApplicationCategory() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'applicationCategory',
            $this->RetrievePropertyValueFromData('applicationCategory'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetApplicationCategory(array $value) : void
    {
        $this->NudgePropertyValue(
            'applicationCategory',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetApplicationSubCategory() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'applicationSubCategory',
            $this->RetrievePropertyValueFromData('applicationSubCategory'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetApplicationSubCategory(array $value) : void
    {
        $this->NudgePropertyValue(
            'applicationSubCategory',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetApplicationSuite() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'applicationSuite',
            $this->RetrievePropertyValueFromData('applicationSuite'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetApplicationSuite(array $value) : void
    {
        $this->NudgePropertyValue(
            'applicationSuite',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAvailableOnDevice() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableOnDevice',
            $this->RetrievePropertyValueFromData('availableOnDevice'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAvailableOnDevice(array $value) : void
    {
        $this->NudgePropertyValue(
            'availableOnDevice',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetCountriesNotSupported() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'countriesNotSupported',
            $this->RetrievePropertyValueFromData('countriesNotSupported'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCountriesNotSupported(array $value) : void
    {
        $this->NudgePropertyValue(
            'countriesNotSupported',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetCountriesSupported() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'countriesSupported',
            $this->RetrievePropertyValueFromData('countriesSupported'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetCountriesSupported(array $value) : void
    {
        $this->NudgePropertyValue(
            'countriesSupported',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetDownloadUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'downloadUrl',
            $this->RetrievePropertyValueFromData('downloadUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDownloadUrl(array $value) : void
    {
        $this->NudgePropertyValue(
            'downloadUrl',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetFeatureList() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'featureList',
            $this->RetrievePropertyValueFromData('featureList'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetFeatureList(array $value) : void
    {
        $this->NudgePropertyValue(
            'featureList',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetFileSize() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'fileSize',
            $this->RetrievePropertyValueFromData('fileSize'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetFileSize(array $value) : void
    {
        $this->NudgePropertyValue(
            'fileSize',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetInstallUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'installUrl',
            $this->RetrievePropertyValueFromData('installUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetInstallUrl(array $value) : void
    {
        $this->NudgePropertyValue(
            'installUrl',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetMemoryRequirements() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'memoryRequirements',
            $this->RetrievePropertyValueFromData('memoryRequirements'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetMemoryRequirements(array $value) : void
    {
        $this->NudgePropertyValue(
            'memoryRequirements',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetOperatingSystem() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'operatingSystem',
            $this->RetrievePropertyValueFromData('operatingSystem'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetOperatingSystem(array $value) : void
    {
        $this->NudgePropertyValue(
            'operatingSystem',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPermissions() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'permissions',
            $this->RetrievePropertyValueFromData('permissions'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPermissions(array $value) : void
    {
        $this->NudgePropertyValue(
            'permissions',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetProcessorRequirements() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'processorRequirements',
            $this->RetrievePropertyValueFromData('processorRequirements'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetProcessorRequirements(array $value) : void
    {
        $this->NudgePropertyValue(
            'processorRequirements',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetReleaseNotes() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'releaseNotes',
            $this->RetrievePropertyValueFromData('releaseNotes'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetReleaseNotes(array $value) : void
    {
        $this->NudgePropertyValue(
            'releaseNotes',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|MediaObject\ImageObject>
    */
    public function GetScreenshot() : array
    {
        /**
        * @var array<int, string|MediaObject\ImageObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'screenshot',
            $this->RetrievePropertyValueFromData('screenshot'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|MediaObject\ImageObject> $value
    */
    public function SetScreenshot(array $value) : void
    {
        $this->NudgePropertyValue(
            'screenshot',
            $value,
            true
        );
    }

    /**
    * @return array<int, SoftwareApplication>
    */
    public function GetSoftwareAddOn() : array
    {
        /**
        * @var array<int, SoftwareApplication>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'softwareAddOn',
            $this->RetrievePropertyValueFromData('softwareAddOn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, SoftwareApplication> $value
    */
    public function SetSoftwareAddOn(array $value) : void
    {
        $this->NudgePropertyValue(
            'softwareAddOn',
            $value
        );
    }

    /**
    * @return array<int, Base>
    */
    public function GetSoftwareHelp() : array
    {
        /**
        * @var array<int, Base>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'softwareHelp',
            $this->RetrievePropertyValueFromData('softwareHelp'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Base> $value
    */
    public function SetSoftwareHelp(array $value) : void
    {
        $this->NudgePropertyValue(
            'softwareHelp',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSoftwareRequirements() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'softwareRequirements',
            $this->RetrievePropertyValueFromData('softwareRequirements'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSoftwareRequirements(array $value) : void
    {
        $this->NudgePropertyValue(
            'softwareRequirements',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSoftwareVersion() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'softwareVersion',
            $this->RetrievePropertyValueFromData('softwareVersion'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSoftwareVersion(array $value) : void
    {
        $this->NudgePropertyValue(
            'softwareVersion',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetStorageRequirements() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'storageRequirements',
            $this->RetrievePropertyValueFromData('storageRequirements'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetStorageRequirements(array $value) : void
    {
        $this->NudgePropertyValue(
            'storageRequirements',
            $value,
            true
        );
    }

    /**
    * @return array<int, Dataset\DataFeed>
    */
    public function GetSupportingData() : array
    {
        /**
        * @var array<int, Dataset\DataFeed>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'supportingData',
            $this->RetrievePropertyValueFromData('supportingData'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Dataset\DataFeed> $value
    */
    public function SetSupportingData(array $value) : void
    {
        $this->NudgePropertyValue(
            'supportingData',
            $value
        );
    }
}
