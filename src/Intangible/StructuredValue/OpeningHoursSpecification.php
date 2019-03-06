<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\DayOfWeek;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\TypeUtilities;

class OpeningHoursSpecification extends Base
{
    use DaftObjectTraits\HasValidFromThrough;

    const SCHEMA_ORG_TYPE = 'OpeningHoursSpecification';

    const PROPERTIES = [
        'closes',
        'dayOfWeek',
        'opens',
        'validFrom',
        'validThrough',
    ];

    /**
    * @return array<int, DataTypes\Time>
    */
    public function GetCloses() : array
    {
        /**
        * @var array<int, DataTypes\Time>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'closes',
            $this->RetrievePropertyValueFromData('closes'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Time> $value
    */
    public function SetCloses(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'closes',
            __METHOD__,
            $value,
            DataTypes\Time::class
        );
    }

    /**
    * @return array<int, DayOfWeek>
    */
    public function GetDayOfWeek() : array
    {
        /**
        * @var array<int, DayOfWeek>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dayOfWeek',
            $this->RetrievePropertyValueFromData('dayOfWeek'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DayOfWeek> $value
    */
    public function SetDayOfWeek(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'dayOfWeek',
            __METHOD__,
            $value,
            DayOfWeek::class
        );
    }

    /**
    * @return array<int, DataTypes\Time>
    */
    public function GetOpens() : array
    {
        /**
        * @var array<int, DataTypes\Time>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'opens',
            $this->RetrievePropertyValueFromData('opens'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DataTypes\Time> $value
    */
    public function SetOpens(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'opens',
            __METHOD__,
            $value,
            DataTypes\Time::class
        );
    }
}
