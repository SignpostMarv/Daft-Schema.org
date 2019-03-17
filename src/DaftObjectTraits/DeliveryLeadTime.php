<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait DeliveryLeadTime
{
    use DaftObjectTrait;

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetDeliveryLeadTime() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'deliveryLeadTime',
            $this->RetrievePropertyValueFromData('deliveryLeadTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetDeliveryLeadTime(array $value) : void
    {
        $this->NudgePropertyValue(
            'deliveryLeadTime',
            $value
        );
    }
}
