<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

class Date extends DateTimeInterface
{
    protected static function ObtainFormat() : string
    {
        return 'Y-m-d';
    }
}
