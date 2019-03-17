<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\SchemaOrg\TypeUtilities;

trait HasGeospatialGeometry
{
    use DaftObjectTrait;

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyContains() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyContains',
            $this->RetrievePropertyValueFromData('geospatiallyContains'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyContains(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyContains',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyCoveredBy() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyCoveredBy',
            $this->RetrievePropertyValueFromData('geospatiallyCoveredBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyCoveredBy(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyCoveredBy',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyCovers() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyCovers',
            $this->RetrievePropertyValueFromData('geospatiallyCovers'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyCovers(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyCovers',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyCrosses() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyCrosses',
            $this->RetrievePropertyValueFromData('geospatiallyCrosses'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyCrosses(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyCrosses',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyDisjoint() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyDisjoint',
            $this->RetrievePropertyValueFromData('geospatiallyDisjoint'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyDisjoint(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyDisjoint',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyEquals() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyEquals',
            $this->RetrievePropertyValueFromData('geospatiallyEquals'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyEquals(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyEquals',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyIntersects() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyIntersects',
            $this->RetrievePropertyValueFromData('geospatiallyIntersects'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyIntersects(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyIntersects',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyOverlaps() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyOverlaps',
            $this->RetrievePropertyValueFromData('geospatiallyOverlaps'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyOverlaps(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyOverlaps',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyTouches() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyTouches',
            $this->RetrievePropertyValueFromData('geospatiallyTouches'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyTouches(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyTouches',
            $value
        );
    }

    /**
    * @return array<int, GeospatialGeometry|Place>
    */
    public function GetGeospatiallyWithin() : array
    {
        /**
        * @var array<int, GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geospatiallyWithin',
            $this->RetrievePropertyValueFromData('geospatiallyWithin'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeospatialGeometry|Place> $value
    */
    public function SetGeospatiallyWithin(array $value) : void
    {
        $this->NudgePropertyValue(
            'geospatiallyWithin',
            $value
        );
    }
}
