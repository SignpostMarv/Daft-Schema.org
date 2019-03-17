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
}
