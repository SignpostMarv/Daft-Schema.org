<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Organization\PerformingGroup\MusicGroup;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait ByArtist
{
    use DaftObjectTrait;

    /**
    * @return array<int, MusicGroup>
    */
    public function GetByArtist() : array
    {
        /**
        * @var array<int, MusicGroup>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'byArtist',
            $this->RetrievePropertyValueFromData('byArtist'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MusicGroup> $value
    */
    public function SetByArtist(array $value) : void
    {
        $this->NudgePropertyValue(
            'byArtist',
            $value
        );
    }
}
