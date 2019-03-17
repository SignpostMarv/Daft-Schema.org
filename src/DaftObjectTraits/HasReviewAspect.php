<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasReviewAspect
{
    use DaftObjectTrait;

    /**
    * @return array<int, string>
    */
    public function GetReviewAspect() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'reviewAspect',
            $this->RetrievePropertyValueFromData('reviewAspect'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetReviewAspect(array $value) : void
    {
        $this->NudgePropertyValue(
            'reviewAspect',
            $value,
            true
        );
    }
}
