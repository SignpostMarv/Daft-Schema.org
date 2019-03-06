<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\TypeUtilities;

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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'articleBody',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'articleSection',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'backstory',
            __METHOD__,
            $value,
            Base::class
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
        $this->NudgePropertWithUniqueIntegersOrTrimmedStrings(
            'pageEnd',
            __METHOD__,
            $value
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
        $this->NudgePropertWithUniqueIntegersOrTrimmedStrings(
            'pageStart',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'pagination',
            __METHOD__,
            $value
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
        $this->NudgePropertyWithUniqueIntegers(
            'wordCount',
            __METHOD__,
            $value
        );
    }
}
