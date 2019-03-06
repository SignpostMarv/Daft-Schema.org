<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

/**
* @template T as DataType
*/
interface DataType
{
    public function DataTypeAsString() : string;

    /**
    * @psalm-return T
    */
    public static function DataTypeFromString(string $value) : DataType;
}
