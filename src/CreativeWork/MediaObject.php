<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Article\NewsArticle;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\MediaSubscription;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Distance;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\TypeUtilities;

class MediaObject extends Base
{
    use DaftObjectTraits\Duration;
    use DaftObjectTraits\HasHeights;

    const SCHEMA_ORG_TYPE = 'MediaObject';

    const PROPERTIES = [
        'associatedArticle',
        'bitrate',
        'contentSize',
        'contentUrl',
        'duration',
        'embedUrl',
        'encodesCreativeWork',
        'encodingFormat',
        'height',
        'playerType',
        'productionCompany',
        'regionsAllowed',
        'requiresSubscription',
        'uploadDate',
        'width',
    ];

    /**
    * @return array<int, NewsArticle>
    */
    public function GetAssociatedArticle() : array
    {
        /**
        * @var array<int, NewsArticle>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'associatedArticle',
            $this->RetrievePropertyValueFromData('associatedArticle'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, NewsArticle> $value
    */
    public function SetAssociatedArticle(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'associatedArticle',
            __METHOD__,
            $value,
            NewsArticle::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetBitrate() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'bitrate',
            $this->RetrievePropertyValueFromData('bitrate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBitrate(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'bitrate',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetContentSize() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contentSize',
            $this->RetrievePropertyValueFromData('contentSize'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetContentSize(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'contentSize',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetContentUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contentUrl',
            $this->RetrievePropertyValueFromData('contentUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetContentUrl(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'contentUrl',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetEmbedUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'embedUrl',
            $this->RetrievePropertyValueFromData('embedUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEmbedUrl(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'embedUrl',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Base>
    */
    public function GetEncodesCreativeWork() : array
    {
        /**
        * @var array<int, Base>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'encodesCreativeWork',
            $this->RetrievePropertyValueFromData('encodesCreativeWork'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Base> $value
    */
    public function SetEncodesCreativeWork(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'encodesCreativeWork',
            __METHOD__,
            $value,
            Base::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPlayerType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'playerType',
            $this->RetrievePropertyValueFromData('playerType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPlayerType(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'playerType',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetProductionCompany() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'productionCompany',
            $this->RetrievePropertyValueFromData('productionCompany'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetProductionCompany(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'productionCompany',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetRegionsAllowed() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'regionsAllowed',
            $this->RetrievePropertyValueFromData('regionsAllowed'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetRegionsAllowed(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'regionsAllowed',
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @return array<int, bool|MediaSubscription>
    */
    public function GetRequiresSubscription() : array
    {
        /**
        * @var array<int, bool|MediaSubscription>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'requiresSubscription',
            $this->RetrievePropertyValueFromData('requiresSubscription'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool|MediaSubscription> $value
    */
    public function SetRequiresSubscription(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleansOrThings(
            'requiresSubscription',
            __METHOD__,
            $value,
            MediaSubscription::class
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetUploadDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'uploadDate',
            $this->RetrievePropertyValueFromData('uploadDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetUploadDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'uploadDate',
            __METHOD__,
            $value,
            Date::class
        );
    }

    /**
    * @return array<int, Distance|QuantitativeValue>
    */
    public function GetWidth() : array
    {
        /**
        * @var array<int, Distance|QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'width',
            $this->RetrievePropertyValueFromData('width'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Distance|QuantitativeValue> $value
    */
    public function SetWidth(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'width',
            __METHOD__,
            $value,
            Distance::class,
            QuantitativeValue::class
        );
    }
}
