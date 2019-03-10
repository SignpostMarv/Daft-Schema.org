<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\OfferItemCondition;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasItemCondition
{
    use DaftObjectTrait;

    /**
    * @return array<int, OfferItemCondition>
    */
    public function GetItemCondition() : array
    {
        /**
        * @var array<int, OfferItemCondition>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'itemCondition',
            $this->RetrievePropertyValueFromData('itemCondition'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, OfferItemCondition> $value
    */
    public function SetItemCondition(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'itemCondition',
            __METHOD__,
            $value,
            OfferItemCondition::class
        );
    }
}
