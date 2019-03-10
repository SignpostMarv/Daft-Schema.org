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
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Duration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, NewsArticle> $associatedArticle
* @property array<int, string> $bitrate
* @property array<int, string> $contentSize
* @property array<int, string> $contentUrl
* @property array<int, Duration> $duration
* @property array<int, string> $embedUrl
* @property array<int, Base> $encodesCreativeWork
* @property array<int, string> $encodingFormat
* @property array<int, Distance|QuantitativeValue> $height
* @property array<int, string> $playerType
* @property array<int, Organization> $productionCompany
* @property array<int, Place> $regionsAllowed
* @property array<int, bool|MediaSubscription> $requiresSubscription
* @property array<int, Date> $uploadDate
* @property array<int, Distance|QuantitativeValue> $width
*/
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

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'associatedArticle' => [
            NewsArticle::class,
        ],
        'bitrate' => [
            'string',
        ],
        'contentSize' => [
            'string',
        ],
        'contentUrl' => [
            'string',
        ],
        'duration' => TypeUtilities::MULTI_TYPE_DICT__duration,
        'embedUrl' => [
            'string',
        ],
        'encodesCreativeWork' => [
            Base::class,
        ],
        'encodingFormat' => [
            'string',
        ],
        'height' => TypeUtilities::MULTI_TYPE_DICT__height,
        'playerType' => [
            'string',
        ],
        'productionCompany' => [
            Organization::class,
        ],
        'regionsAllowed' => [
            Place::class,
        ],
        'requiresSubscription' => [
            'boolean',
            MediaSubscription::class,
        ],
        'uploadDate' => [
            Date::class,
        ],
        'width' => [
            Distance::class,
            QuantitativeValue::class,
        ],
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
        $this->NudgePropertyValue(
            'associatedArticle',
            $value
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
        $this->NudgePropertyValue(
            'bitrate',
            $value,
            true
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
        $this->NudgePropertyValue(
            'contentSize',
            $value,
            true
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
        $this->NudgePropertyValue(
            'contentUrl',
            $value,
            true
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
        $this->NudgePropertyValue(
            'embedUrl',
            $value,
            true
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
        $this->NudgePropertyValue(
            'encodesCreativeWork',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetEncodingFormat() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'encodingFormat',
            $this->RetrievePropertyValueFromData('encodingFormat'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEncodingFormat(array $value) : void
    {
        $this->NudgePropertyValue(
            'encodingFormat',
            $value,
            true
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
        $this->NudgePropertyValue(
            'playerType',
            $value,
            true
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
        $this->NudgePropertyValue(
            'productionCompany',
            $value
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
        $this->NudgePropertyValue(
            'regionsAllowed',
            $value
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
        $this->NudgePropertyValue(
            'requiresSubscription',
            $value
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
        $this->NudgePropertyValue(
            'uploadDate',
            $value
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
        $this->NudgePropertyValue(
            'width',
            $value
        );
    }
}
