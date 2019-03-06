<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'applicationCategory',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'applicationSubCategory',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'applicationSuite',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'availableOnDevice',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'countriesNotSupported',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'countriesSupported',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'downloadUrl',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'featureList',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'fileSize',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'installUrl',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'memoryRequirements',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'operatingSystem',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'permissions',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'processorRequirements',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'releaseNotes',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'screenshot',
            __METHOD__,
            $value,
            MediaObject\ImageObject::class
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'softwareAddOn',
            __METHOD__,
            $value,
            SoftwareApplication::class
        );
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetSoftwareHelp() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'softwareHelp',
            $this->RetrievePropertyValueFromData('softwareHelp'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetSoftwareHelp(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'softwareHelp',
            __METHOD__,
            $value,
            CreativeWork::class
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'softwareRequirements',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'softwareVersion',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'storageRequirements',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueValuesOfThings(
            'supportingData',
            __METHOD__,
            $value,
            Dataset\DataFeed::class
        );
    }
}
