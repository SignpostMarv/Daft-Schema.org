<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

trait DaftObjectTrait
{
    abstract protected function NudgePropertyValue(
        string $property,
        $value,
        bool $autoTrimStrings = false,
        bool $throwIfNotUnique = false
    ) : void;

    /**
    * @param array<int, bool> $value
    */
    abstract protected function NudgePropertyWithUniqueBooleans(
        string $property,
        array $value
    ) : void;

    /**
    * @return scalar|array|object|null the property value
    */
    abstract protected function RetrievePropertyValueFromData(string $property);
}
