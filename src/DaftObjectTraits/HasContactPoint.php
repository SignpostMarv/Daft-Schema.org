<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasContactPoint
{
    use DaftObjectTrait;

    /**
    * @return array<int, ContactPoint>
    */
    public function GetContactPoint() : array
    {
        /**
        * @var array<int, ContactPoint>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contactPoint',
            $this->RetrievePropertyValueFromData('contactPoint'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ContactPoint> $value
    */
    public function SetContactPoint(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'contactPoint',
            __METHOD__,
            $value,
            ContactPoint::class
        );
    }
}
