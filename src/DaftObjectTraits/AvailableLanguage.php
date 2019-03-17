<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Language;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait AvailableLanguage
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|Language>
    */
    public function GetAvailableLanguage() : array
    {
        /**
        * @var array<int, string|Language>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'availableLanguage',
            $this->RetrievePropertyValueFromData('availableLanguage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Language> $value
    */
    public function SetAvailableLanguage(array $value) : void
    {
        $this->NudgePropertyValue(
            'availableLanguage',
            $value,
            true
        );
    }
}
