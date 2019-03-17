<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\SpeakableSpecification;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $articleBody
* @property array<int, string> $articleSection
* @property array<int, string|Base> $backstory
* @property array<int, int|string> $pageEnd
* @property array<int, int|string> $pageStart
* @property array<int, string> $pagination
* @property array<int, string|SpeakableSpecification> $speakable
* @property array<int, int|string> $wordCount
*/
class Article extends Base
{
    use DaftObjectTraits\HasSpeakable;

    const SCHEMA_ORG_TYPE = 'Article';

    const PROPERTIES = [
        'articleBody',
        'articleSection',
        'backstory',
        'pageEnd',
        'pageStart',
        'pagination',
        'speakable',
        'wordCount',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'articleBody' => [
            'string',
        ],
        'articleSection' => [
            'string',
        ],
        'backstory' => [
            'string',
            Base::class,
        ],
        'pageEnd' => [
            'integer',
            'string',
        ],
        'pageStart' => [
            'integer',
            'string',
        ],
        'pagination' => [
            'string',
        ],
        'speakable' => TypeUtilities::MULTI_TYPE_DICT__speakable,
        'wordCount' => [
            'integer',
            'string',
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetArticleBody() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'articleBody',
            $this->RetrievePropertyValueFromData('articleBody'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetArticleBody(array $value) : void
    {
        $this->NudgePropertyValue(
            'articleBody',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetArticleSection() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'articleSection',
            $this->RetrievePropertyValueFromData('articleSection'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetArticleSection(array $value) : void
    {
        $this->NudgePropertyValue(
            'articleSection',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|Base>
    */
    public function GetBackstory() : array
    {
        /**
        * @var array<int, string|Base>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'backstory',
            $this->RetrievePropertyValueFromData('backstory'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Base> $value
    */
    public function SetBackstory(array $value) : void
    {
        $this->NudgePropertyValue(
            'backstory',
            $value,
            true
        );
    }

    /**
    * @return array<int, int|string>
    */
    public function GetPageEnd() : array
    {
        /**
        * @var array<int, int|string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'pageEnd',
            $this->RetrievePropertyValueFromData('pageEnd'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|string> $value
    */
    public function SetPageEnd(array $value) : void
    {
        $this->NudgePropertyValue(
            'pageEnd',
            $value,
            true
        );
    }

    /**
    * @return array<int, int|string>
    */
    public function GetPageStart() : array
    {
        /**
        * @var array<int, int|string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'pageStart',
            $this->RetrievePropertyValueFromData('pageStart'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|string> $value
    */
    public function SetPageStart(array $value) : void
    {
        $this->NudgePropertyValue(
            'pageStart',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPagination() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'pagination',
            $this->RetrievePropertyValueFromData('pagination'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPagination(array $value) : void
    {
        $this->NudgePropertyValue(
            'pagination',
            $value,
            true
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetWordCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'wordCount',
            $this->RetrievePropertyValueFromData('wordCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetWordCount(array $value) : void
    {
        $this->NudgePropertyValue(
            'wordCount',
            $value
        );
    }
}
