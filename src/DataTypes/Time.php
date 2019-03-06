<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

class Time extends DateTimeInterface
{
    protected static function ObtainFormat() : string
    {
        return 'h:i:s\ZP';
    }
}
