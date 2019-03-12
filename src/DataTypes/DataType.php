<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes;

use JsonSerializable;

/**
* @template T as DataType
*/
interface DataType extends JsonSerializable
{
    public function DataTypeAsString() : string;

    /**
    * @psalm-return T
    */
    public static function DataTypeFromString(string $value) : DataType;
}
