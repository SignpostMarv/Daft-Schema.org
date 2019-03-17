<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

use DateTimeImmutable;
use DateTimeZone;

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
        $out = new static($value);
        $format = static::ObtainFormat();

        if ( ! is_null($tz)) {
            $out->setTimezone($tz);
        }

        $out = new static($out->format($format));

        if ( ! is_null($tz)) {
            $out->setTimezone($tz);
        }

        return $out;
    }

    abstract protected static function ObtainFormat() : string;
}
