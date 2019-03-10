<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Offer;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasMakesOffer
{
    use DaftObjectTrait;

    /**
    * @return array<int, Offer>
    */
    public function GetMakesOffer() : array
    {
        /**
        * @var array<int, Offer>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'makesOffer',
            $this->RetrievePropertyValueFromData('makesOffer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Offer> $value
    */
    public function SetMakesOffer(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'makesOffer',
            __METHOD__,
            $value,
            Offer::class
        );
    }
}
