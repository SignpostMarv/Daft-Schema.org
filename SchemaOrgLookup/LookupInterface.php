<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

interface LookupInterface
{
    /**
    * @return array<int, string>
    *
    * @psalm-return array<int, class-string<\SignpostMarv\DaftObject\SchemaOrg\Thing>>
    */
    public static function ObtainClasses() : array;
}
