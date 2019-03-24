<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Language;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasInLanguage
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Language>
    */
    public function GetInLanguage() : array
    {
        /**
        * @var array<int, string|Language>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'inLanguage',
            $this->RetrievePropertyValueFromData('inLanguage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Language> $value
    */
    public function SetInLanguage(array $value) : void
    {
        $this->NudgePropertyValue(
            'inLanguage',
            $value,
            Language::BOOL_DEFAULT_AUTOTRIMSTRINGS
        );
    }
}
