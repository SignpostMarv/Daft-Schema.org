<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

use DateTimeImmutable;
use DateTimeZone;
use RuntimeException;

abstract class DateTimeInterface extends DateTimeImmutable implements DataType
{
    public function DataTypeAsString() : string
    {
        return $this->format(static::ObtainFormat());
    }

    public static function DataTypeFromString(string $value) : DataType
    {
        return static::ObtainFromString($value);
    }

    public static function ObtainFromString(
        string $value,
        DateTimeZone $tz = null
    ) : DateTimeInterface {
        $out = static::createFromFormat($value, static::ObtainFormat(), $tz);

        if ( ! is_object($out) || ! is_a($out, static::class)) {
            throw new RuntimeException(
                static::class .
                '::createFromFormat() did not return an instance of ' .
                static::class .
                ', ' .
                (is_object($out) ? get_class($out) : gettype($out))
            );
        }

        return $out;
    }

    abstract protected static function ObtainFormat() : string;
}
