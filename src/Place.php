<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Map;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Photograph;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\GeospatialGeometry;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;

/**
* @property array<int, PropertyValue> $additionalProperty
* @property array<int, string|PostalAddress> $address
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, LocationFeatureSpecification> $amenityFeature
* @property array<int, string> $branchCode
* @property array<int, Place> $containedInPlace
* @property array<int, Place> $containsPlace
* @property array<int, Event> $event
* @property array<int, string> $faxNumber
* @property array<int, string|Map> $hasMap
* @property array<int, GeoCoordinates|GeoShape> $geo
* @property array<int, GeospatialGeometry|Place> $geospatiallyContains
* @property array<int, GeospatialGeometry|Place> $geospatiallyCoveredBy
* @property array<int, GeospatialGeometry|Place> $geospatiallyCovers
* @property array<int, GeospatialGeometry|Place> $geospatiallyCrosses
* @property array<int, GeospatialGeometry|Place> $geospatiallyDisjoint
* @property array<int, GeospatialGeometry|Place> $geospatiallyEquals
* @property array<int, GeospatialGeometry|Place> $geospatiallyIntersects
* @property array<int, GeospatialGeometry|Place> $geospatiallyOverlaps
* @property array<int, GeospatialGeometry|Place> $geospatiallyTouches
* @property array<int, GeospatialGeometry|Place> $geospatiallyWithin
* @property array<int, string> $globalLocationNumber
* @property array<int, bool> $isAccessibleForFree
* @property array<int, string> $isicV4
* @property array<int, ImageObject> $logo
* @property array<int, int> $maximumAttendeeCapacity
* @property array<int, OpeningHoursSpecification> $openingHoursSpecification
* @property array<int, ImageObject|Photograph> $photo
* @property array<int, bool> $publicAccess
* @property array<int, Review> $review
* @property array<int, bool> $smokingAllowed
* @property array<int, OpeningHoursSpecification> $specialOpeningHoursSpecification
* @property array<int, string> $telephone
*/
class Place extends Thing
{
    use DaftObjectTraits\TraitAdditionalProperty;
    use DaftObjectTraits\HasAddress;
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasEvent;
    use DaftObjectTraits\HasFaxNumber;
    use DaftObjectTraits\HasGeospatialGeometry;
    use DaftObjectTraits\HasGlobalLocationNumber;
    use DaftObjectTraits\HasIsAccessibleForFree;
    use DaftObjectTraits\HasIsicV4;
    use DaftObjectTraits\HasLogo;
    use DaftObjectTraits\MaximumAttendeeCapacity;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\HasTelephone;

    const SCHEMA_ORG_TYPE = 'Place';

    const PROPERTIES = [
        'additionalProperty',
        'address',
        'aggregateRating',
        'amenityFeature',
        'branchCode',
        'containedInPlace',
        'containsPlace',
        'event',
        'faxNumber',
        'geo',
        'geospatiallyContains',
        'geospatiallyCoveredBy',
        'geospatiallyCovers',
        'geospatiallyCrosses',
        'geospatiallyDisjoint',
        'geospatiallyEquals',
        'geospatiallyIntersects',
        'geospatiallyOverlaps',
        'geospatiallyTouches',
        'geospatiallyWithin',
        'globalLocationNumber',
        'hasMap',
        'isAccessibleForFree',
        'isicV4',
        'logo',
        'maximumAttendeeCapacity',
        'openingHoursSpecification',
        'photo',
        'publicAccess',
        'review',
        'smokingAllowed',
        'specialOpeningHoursSpecification',
        'telephone',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'additionalProperty' => [
            PropertyValue::class,
        ],
        'address' => TypeUtilities::MULTI_TYPE_DICT__address,
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'amenityFeature' => [
            LocationFeatureSpecification::class,
        ],
        'branchCode' => [
            'string',
        ],
        'containedInPlace' => [
            Place::class,
        ],
        'containsPlace' => [
            Place::class,
        ],
        'event' => [
            Event::class,
        ],
        'faxNumber' => [
            'string',
        ],
        'hasMap' => [
            'string',
            Map::class,
        ],
        'geo' => [
            GeoCoordinates::class,
            GeoShape::class,
        ],
        'geospatiallyContains' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyCoveredBy' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyCovers' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyCrosses' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyDisjoint' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyEquals' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyIntersects' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyOverlaps' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyTouches' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'geospatiallyWithin' => TypeUtilities::MULTI_TYPE_COMMON__GeospatialGeometry__or__Place,
        'globalLocationNumber' => [
            'string',
        ],
        'isAccessibleForFree' => [
            'boolean',
        ],
        'isicV4' => [
            'string',
        ],
        'logo' => [
            ImageObject::class,
        ],
        'maximumAttendeeCapacity' => [
            'integer',
        ],
        'openingHoursSpecification' => [
            OpeningHoursSpecification::class,
        ],
        'photo' => [
            ImageObject::class,
            Photograph::class,
        ],
        'publicAccess' => [
            'boolean',
        ],
        'review' => [
            Review::class,
        ],
        'smokingAllowed' => [
            'boolean',
        ],
        'specialOpeningHoursSpecification' => [
            OpeningHoursSpecification::class,
        ],
        'telephone' => [
            'string',
        ],
    ];

    /**
    * @return array<int, LocationFeatureSpecification>
    */
    public function GetAmenityFeature() : array
    {
        /**
        * @var array<int, LocationFeatureSpecification>
        */
        $out = $this->ExpectRetrievedValueIsArray('amenityFeature');

        return $out;
    }

    /**
    * @param array<int, LocationFeatureSpecification> $value
    */
    public function SetAmenityFeature(array $value) : void
    {
        $this->NudgePropertyValue('amenityFeature', $value);
    }

    /**
    * @return array<int, string>
    */
    public function GetBranchCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('branchCode');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBranchCode(array $value) : void
    {
        $this->NudgePropertyValue('branchCode', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Place>
    */
    public function GetContainedInPlace() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = $this->ExpectRetrievedValueIsArray('containedInPlace');

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetContainedInPlace(array $value) : void
    {
        $this->NudgePropertyValue('containedInPlace', $value);
    }

    /**
    * @return array<int, Place>
    */
    public function GetContainsPlace() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = $this->ExpectRetrievedValueIsArray('containsPlace');

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetContainsPlace(array $value) : void
    {
        $this->NudgePropertyValue('containsPlace', $value);
    }

    /**
    * @return array<int, GeoCoordinates|GeoShape>
    */
    public function GetGeo() : array
    {
        /**
        * @var array<int, GeoCoordinates|GeoShape>
        */
        $out = $this->ExpectRetrievedValueIsArray('geo');

        return $out;
    }

    /**
    * @param array<int, GeoCoordinates|GeoShape> $value
    */
    public function SetGeo(array $value) : void
    {
        $this->NudgePropertyValue('geo', $value);
    }

    /**
    * @return array<int, string|Map>
    */
    public function GetHasMap() : array
    {
        /**
        * @var array<int, string|Map>
        */
        $out = $this->ExpectRetrievedValueIsArray('hasMap');

        return $out;
    }

    /**
    * @param array<int, string|Map> $value
    */
    public function SetHasMap(array $value) : void
    {
        $this->NudgePropertyValue('hasMap', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, OpeningHoursSpecification>
    */
    public function GetOpeningHoursSpecification() : array
    {
        /**
        * @var array<int, OpeningHoursSpecification>
        */
        $out = $this->ExpectRetrievedValueIsArray('openingHoursSpecification');

        return $out;
    }

    /**
    * @param array<int, OpeningHoursSpecification> $value
    */
    public function SetOpeningHoursSpecification(array $value) : void
    {
        $this->NudgePropertyValue('openingHoursSpecification', $value);
    }

    /**
    * @return array<int, ImageObject|Photograph>
    */
    public function GetPhoto() : array
    {
        /**
        * @var array<int, ImageObject|Photograph>
        */
        $out = $this->ExpectRetrievedValueIsArray('photo');

        return $out;
    }

    /**
    * @param array<int, ImageObject|Photograph> $value
    */
    public function SetPhoto(array $value) : void
    {
        $this->NudgePropertyValue('photo', $value);
    }

    /**
    * @return array<int, bool>
    */
    public function GetPublicAccess() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = $this->ExpectRetrievedValueIsArray('publicAccess');

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetPublicAccess(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans('publicAccess', $value);
    }

    /**
    * @return array<int, bool>
    */
    public function GetSmokingAllowed() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = $this->ExpectRetrievedValueIsArray('smokingAllowed');

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetSmokingAllowed(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans('smokingAllowed', $value);
    }

    /**
    * @return array<int, OpeningHoursSpecification>
    */
    public function GetSpecialOpeningHoursSpecification() : array
    {
        /**
        * @var array<int, OpeningHoursSpecification>
        */
        $out = $this->ExpectRetrievedValueIsArray('specialOpeningHoursSpecification');

        return $out;
    }

    /**
    * @param array<int, OpeningHoursSpecification> $value
    */
    public function SetSpecialOpeningHoursSpecification(array $value) : void
    {
        $this->NudgePropertyValue('specialOpeningHoursSpecification', $value);
    }
}
