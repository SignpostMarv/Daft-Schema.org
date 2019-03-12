<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType\Text;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType as Upstream;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType\Text as Base;

/**
* @template T as CssSelectorType
*
* @template-implements Base<T>
*/
class CssSelectorType implements Base
{
    /**
    * @var string
    */
    protected $text;

    protected function __construct(string $text)
    {
        $this->text = $text;
    }

    public function __toString() : string
    {
        return $this->text;
    }

    public function DataTypeAsString() : string
    {
        return $this->text;
    }

    public function jsonSerialize() : string
    {
        return $this->DataTypeAsString();
    }

    public static function DataTypeFromString(string $value) : Upstream
    {
        return new static($value);
    }
}
