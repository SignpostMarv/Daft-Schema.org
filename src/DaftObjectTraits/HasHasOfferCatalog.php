<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList\OfferCatalog;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasHasOfferCatalog
{
    use DaftObjectTrait;

    /**
    * @return array<int, OfferCatalog>
    */
    public function GetHasOfferCatalog() : array
    {
        /**
        * @var array<int, OfferCatalog>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hasOfferCatalog',
            $this->RetrievePropertyValueFromData('hasOfferCatalog'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, OfferCatalog> $value
    */
    public function SetHasOfferCatalog(array $value) : void
    {
        $this->NudgePropertyValue(
            'hasOfferCatalog',
            $value
        );
    }
}
