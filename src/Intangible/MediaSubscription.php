<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible;

use SignpostMarv\DaftObject\SchemaOrg\Intangible as Base;
use SignpostMarv\DaftObject\SchemaOrg\Offer;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

/**
* @property array<int, Organization> $authenticator
* @property array<int, Offer> $expectsAcceptanceOf
*/
class MediaSubscription extends Base
{
    const SCHEMA_ORG_TYPE = 'MediaSubscription';

    const PROPERTIES = [
        'authenticator',
        'expectsAcceptanceOf',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'authenticator' => [
            Organization::class,
        ],
        'expectsAcceptanceOf' => [
            Offer::class,
        ],
    ];

    /**
    * @return array<int, Organization>
    */
    public function GetAuthenticator() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'authenticator',
            $this->RetrievePropertyValueFromData('authenticator'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetAuthenticator(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'authenticator',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, Offer>
    */
    public function GetExpectsAcceptanceOf() : array
    {
        /**
        * @var array<int, Offer>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'expectsAcceptanceOf',
            $this->RetrievePropertyValueFromData('expectsAcceptanceOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Offer> $value
    */
    public function SetExpectsAcceptanceOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'expectsAcceptanceOf',
            __METHOD__,
            $value,
            Offer::class
        );
    }
}
