<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Audience;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasAudience
{
    use DaftObjectTrait;

    /**
    * @return array<int, Audience>
    */
    public function GetAudience() : array
    {
        /**
        * @var array<int, Audience>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'audience',
            $this->RetrievePropertyValueFromData('audience'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Audience> $value
    */
    public function SetAudience(array $value) : void
    {
        $this->NudgePropertyValue(
            'audience',
            $value
        );
    }
}
