<?php

declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrgLookup;

class Lookup_edb4be67009a3bdc1eb33ff0b245859a2775f6d2d3fa7ba32d6535f84788abd11079cfc00d7ddca8f5215fe300d85456ffbeaf88c3b0beb92d1cd846e2143cae implements LookupInterface
{
    public static function ObtainClasses() : array
    {
        return ['SignpostMarv\\DaftObject\\SchemaOrg\\Intangible\\ItemList\\BreadcrumbList'];
    }
}
