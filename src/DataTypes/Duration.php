<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

use DateInterval;

class Duration extends DateInterval implements DataType
{
    const DAYS_IN_WEEK = 7;

    public function DataTypeAsString() : string
    {
        $days = $this->d;
        $weeks = 0;

        if ($days > self::DAYS_IN_WEEK) {
            $weeks = (int) floor($days / self::DAYS_IN_WEEK);
            $days = $days % self::DAYS_IN_WEEK;
        }

        $seconds = $this->s + $this->f;

        return
            'P' .
            (0 !== $this->y ? ($this->y . 'Y') : '') .
            (0 !== $this->m ? ($this->m . 'M') : '') .
            (0 !== $weeks ? ($weeks . 'W') : '') .
            (0 !== $days ? ($days . 'D') : '') .
            (
                (
                    0 !== $this->h ||
                    0 !== $this->i ||
                    0.0 !== $seconds
                )
                    ? (
                        'T' .
                        (
                            (0 !== $this->h ? ($this->h . 'H') : '') .
                            (0 !== $this->i ? ($this->i . 'M') : '') .
                            (0.0 !== $seconds ? ($seconds . 'S') : '')
                        )
                    )
                    : ''
            );
    }

    public function jsonSerialize() : string
    {
        return $this->DataTypeAsString();
    }

    public static function DataTypeFromString(string $value) : DataType
    {
        return static::DurationFromString($value);
    }

    public static function DurationFromString(string $value) : DataType
    {
        return new static($value);
    }
}
