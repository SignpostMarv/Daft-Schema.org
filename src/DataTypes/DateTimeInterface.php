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

    public function jsonSerialize() : string
    {
        return $this->DataTypeAsString();
    }

    public static function DataTypeFromString(string $value) : DataType
    {
        return static::ObtainFromString($value);
    }

    public static function ObtainFromString(
        string $value,
        DateTimeZone $tz = null
    ) : DateTimeInterface {
        $format = static::ObtainFormat();
        $out = static::createFromFormat($format, $value, $tz);

        if ( ! is_object($out)) {
            throw new RuntimeException(
                static::class .
                '::createFromFormat() did not return an instance of ' .
                static::class .
                ', ' .
                gettype($out) .
                ' given!'
            );
        }

        return new static($out->format($format));
    }

    abstract protected static function ObtainFormat() : string;
}
