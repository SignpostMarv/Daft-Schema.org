<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasPublishingPrinciples
{
    use DaftObjectTrait;

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetPublishingPrinciples() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publishingPrinciples',
            $this->RetrievePropertyValueFromData('publishingPrinciples'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetPublishingPrinciples(array $value) : void
    {
        $this->NudgePropertyValue(
            'publishingPrinciples',
            $value,
            true
        );
    }
}
