<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Offer;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasOffers
{
    use DaftObjectTrait;

    /**
    * @return array<int, Offer>
    */
    public function GetOffers() : array
    {
        /**
        * @var array<int, Offer>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'offers',
            $this->RetrievePropertyValueFromData('offers'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Offer> $value
    */
    public function SetOffers(array $value) : void
    {
        $this->NudgePropertyValue(
            'offers',
            $value
        );
    }
}
