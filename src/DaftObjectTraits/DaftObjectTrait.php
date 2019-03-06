<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes;
use SignpostMarv\DaftObject\SchemaOrg\Thing;

trait DaftObjectTrait
{
    abstract protected function NudgePropertyValue(
        string $property,
        $value,
        bool $autoTrimStrings = false,
        bool $throwIfNotUnique = false
    ) : void;

    /**
    * @param array<int, Thing|DataTypes\DataType> $value
    *
    * @psalm-param class-string<Thing>|class-string<DataTypes\DataType> ...$validThings
    */
    abstract protected function NudgePropertyWithUniqueValuesOfThings(
        string $property,
        string $method,
        array $value,
        string ...$validThings
    ) : void;
}
