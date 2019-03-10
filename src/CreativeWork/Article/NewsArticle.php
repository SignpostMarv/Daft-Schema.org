<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Article;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Article as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, string> $dateline
* @property array<int, string> $printColumn
* @property array<int, string> $printEdition
* @property array<int, string> $printPage
* @property array<int, string> $printSection
*/
class NewsArticle extends Base
{
    const SCHEMA_ORG_TYPE = 'NewsArticle';

    const PROPERTIES = [
        'dateline',
        'printColumn',
        'printEdition',
        'printPage',
        'printSection',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'dateline' => [
            'string',
        ],
        'printColumn' => [
            'string',
        ],
        'printEdition' => [
            'string',
        ],
        'printPage' => [
            'string',
        ],
        'printSection' => [
            'string',
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetDateline() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dateline',
            $this->RetrievePropertyValueFromData('dateline'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDateline(array $value) : void
    {
        $this->NudgePropertyValue(
            'dateline',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPrintColumn() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'printColumn',
            $this->RetrievePropertyValueFromData('printColumn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPrintColumn(array $value) : void
    {
        $this->NudgePropertyValue(
            'printColumn',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPrintEdition() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'printEdition',
            $this->RetrievePropertyValueFromData('printEdition'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPrintEdition(array $value) : void
    {
        $this->NudgePropertyValue(
            'printEdition',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPrintPage() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'printPage',
            $this->RetrievePropertyValueFromData('printPage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPrintPage(array $value) : void
    {
        $this->NudgePropertyValue(
            'printPage',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetPrintSection() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'printSection',
            $this->RetrievePropertyValueFromData('printSection'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetPrintSection(array $value) : void
    {
        $this->NudgePropertyValue(
            'printSection',
            $value,
            true
        );
    }
}
