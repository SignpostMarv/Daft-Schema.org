<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;

trait DateCreatedModified
{
    use DaftObjectTrait;

    /**
    * @return array<int, Date|DateTime>
    */
    public function GetDateCreated() : array
    {
        /**
        * @var array<int, Date|DateTime>
        */
        $out = $this->ExpectRetrievedValueIsArray('dateCreated');

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetDateCreated(array $value) : void
    {
        $this->NudgePropertyValue('dateCreated', $value);
    }

    /**
    * @return array<int, Date|DateTime>
    */
    public function GetDateModified() : array
    {
        /**
        * @var array<int, Date|DateTime>
        */
        $out = $this->ExpectRetrievedValueIsArray('dateModified');

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetDateModified(array $value) : void
    {
        $this->NudgePropertyValue('dateModified', $value);
    }
}
