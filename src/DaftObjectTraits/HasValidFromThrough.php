<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasValidFromThrough
{
    use DaftObjectTrait;

    /**
    * @return array<int, DateTime>
    */
    public function GetValidFrom() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'validFrom',
            $this->RetrievePropertyValueFromData('validFrom'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetValidFrom(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'validFrom',
            __METHOD__,
            $value,
            DateTime::class
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetValidThrough() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'validThrough',
            $this->RetrievePropertyValueFromData('validThrough'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetValidThrough(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'validThrough',
            __METHOD__,
            $value,
            DateTime::class
        );
    }
}
