<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\TypeUtilities;

class Dataset extends Base
{
    use DaftObjectTraits\Issn;
    use DaftObjectTraits\MeasurementTechnique;

    const SCHEMA_ORG_TYPE = 'Dataset';

    const PROPERTIES = [
        'distribution',
        'includedInDataCatalog',
        'issn',
        'measurementTechnique',
        'variableMeasured',
    ];

    /**
    * @return array<int, MediaObject\DataDownload>
    */
    public function GetDistribution() : array
    {
        /**
        * @var array<int, MediaObject\DataDownload>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'distribution',
            $this->RetrievePropertyValueFromData('distribution'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MediaObject\DataDownload> $value
    */
    public function SetDistribution(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'distribution',
            __METHOD__,
            $value,
            MediaObject\DataDownload::class
        );
    }

    /**
    * @return array<int, DataCatalog>
    */
    public function GetIncludedInDataCatalog() : array
    {
        /**
        * @var array<int, DataCatalog>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'includedInDataCatalog',
            $this->RetrievePropertyValueFromData('includedInDataCatalog'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataCatalog> $value
    */
    public function SetIncludedInDataCatalog(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'includedInDataCatalog',
            __METHOD__,
            $value,
            DataCatalog::class
        );
    }

    /**
    * @return array<int, string|PropertyValue>
    */
    public function GetVariableMeasured() : array
    {
        /**
        * @var array<int, string|PropertyValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'variableMeasured',
            $this->RetrievePropertyValueFromData('variableMeasured'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|PropertyValue> $value
    */
    public function SetVariableMeasured(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'variableMeasured',
            __METHOD__,
            $value,
            PropertyValue::class
        );
    }
}
