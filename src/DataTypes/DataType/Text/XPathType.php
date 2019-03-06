<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType\Text;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType as Upstream;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DataType\Text as Base;

/**
* @template T as XPathType
*
* @template-implements Base<T>
*/
class XPathType implements Base
{
    /**
    * @var string
    */
    protected $text;

    protected function __construct(string $text)
    {
        $this->text = $text;
    }

    public function DataTypeAsString() : string
    {
        return $this->text;
    }

    public static function DataTypeFromString(string $value) : Upstream
    {
        return new static($value);
    }
}
