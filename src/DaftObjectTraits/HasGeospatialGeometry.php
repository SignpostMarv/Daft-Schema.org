<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry;
use SignpostMarv\DaftObject\SchemaOrg\Place;
use SignpostMarv\DaftObject\TypeUtilities;

trait HasGeospatialGeometry
{
    use DaftObjectTrait;

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyContains() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyContains',
            $this->RetrievePropertyValueFromData('geoSpatiallyContains'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyContains(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyContains',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyCoveredBy() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyCoveredBy',
            $this->RetrievePropertyValueFromData('geoSpatiallyCoveredBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyCoveredBy(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyCoveredBy',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyCovers() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyCovers',
            $this->RetrievePropertyValueFromData('geoSpatiallyCovers'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyCovers(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyCovers',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyCrosses() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyCrosses',
            $this->RetrievePropertyValueFromData('geoSpatiallyCrosses'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyCrosses(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyCrosses',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyDisjoint() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyDisjoint',
            $this->RetrievePropertyValueFromData('geoSpatiallyDisjoint'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyDisjoint(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyDisjoint',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyEquals() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyEquals',
            $this->RetrievePropertyValueFromData('geoSpatiallyEquals'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyEquals(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyEquals',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyIntersects() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyIntersects',
            $this->RetrievePropertyValueFromData('geoSpatiallyIntersects'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyIntersects(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyIntersects',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyOverlaps() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyOverlaps',
            $this->RetrievePropertyValueFromData('geoSpatiallyOverlaps'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyOverlaps(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyOverlaps',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyTouches() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyTouches',
            $this->RetrievePropertyValueFromData('geoSpatiallyTouches'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyTouches(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyTouches',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }

    /**
    * @return array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
    */
    public function GetGeoSpatiallyWithin() : array
    {
        /**
        * @var array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geoSpatiallyWithin',
            $this->RetrievePropertyValueFromData('geoSpatiallyWithin'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, \SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry|Place> $value
    */
    public function SetGeoSpatiallyWithin(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geoSpatiallyWithin',
            __METHOD__,
            $value,
            GeospatialGeometry::class,
            Place::class
        );
    }
}
