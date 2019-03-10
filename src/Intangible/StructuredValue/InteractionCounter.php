<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue;

use SignpostMarv\DaftObject\SchemaOrg\Action;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\SoftwareApplication;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\WebSite;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue as Base;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

class InteractionCounter extends Base
{
    const SCHEMA_ORG_TYPE = 'InteractionCounter';

    const PROPERTIES = [
        'interactionService',
        'interactionType',
        'userInteractionCount',
    ];

    /**
    * @return array<int, SoftwareApplication|WebSite>
    */
    public function GetInteractionService() : array
    {
        /**
        * @var array<int, SoftwareApplication|WebSite>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'interactionService',
            $this->RetrievePropertyValueFromData('interactionService'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, SoftwareApplication|WebSite> $value
    */
    public function SetInteractionService(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'interactionService',
            __METHOD__,
            $value,
            CreativeWork::class,
            WebSite::class
        );
    }

    /**
    * @return array<int, Action>
    */
    public function GetInteractionType() : array
    {
        /**
        * @var array<int, Action>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'interactionType',
            $this->RetrievePropertyValueFromData('interactionType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Action> $value
    */
    public function SetInteractionType(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'interactionType',
            __METHOD__,
            $value,
            Action::class
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetUserInteractionCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'userInteractionCount',
            $this->RetrievePropertyValueFromData('userInteractionCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetUserInteractionCount(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'userInteractionCount',
            __METHOD__,
            $value
        );
    }
}
