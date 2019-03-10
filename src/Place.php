<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Map;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Photograph;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OpeningHoursSpecification;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;

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

    /**
    * @return array<int, LocationFeatureSpecification>
    */
    public function GetAmenityFeature() : array
    {
        /**
        * @var array<int, LocationFeatureSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'amenityFeature',
            $this->RetrievePropertyValueFromData('amenityFeature'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, LocationFeatureSpecification> $value
    */
    public function SetAmenityFeature(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'amenityFeature',
            __METHOD__,
            $value,
            LocationFeatureSpecification::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetBranchCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'branchCode',
            $this->RetrievePropertyValueFromData('branchCode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetBranchCode(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'branchCode',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetContainedInPlace() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'containedInPlace',
            $this->RetrievePropertyValueFromData('containedInPlace'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetContainedInPlace(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'containedInPlace',
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetContainsPlace() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'containsPlace',
            $this->RetrievePropertyValueFromData('containsPlace'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetContainsPlace(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'containsPlace',
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @return array<int, GeoCoordinates|GeoShape>
    */
    public function GetGeo() : array
    {
        /**
        * @var array<int, GeoCoordinates|GeoShape>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'geo',
            $this->RetrievePropertyValueFromData('geo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, GeoCoordinates|GeoShape> $value
    */
    public function SetGeo(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'geo',
            __METHOD__,
            $value,
            GeoCoordinates::class,
            GeoShape::class
        );
    }

    /**
    * @return array<int, string|Map>
    */
    public function GetHasMap() : array
    {
        /**
        * @var array<int, string|Map>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hasMap',
            $this->RetrievePropertyValueFromData('hasMap'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Map> $value
    */
    public function SetHasMap(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'hasMap',
            __METHOD__,
            $value,
            Map::class
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetMaximumAttendeeCapacity() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'maximumAttendeeCapacity',
            $this->RetrievePropertyValueFromData('maximumAttendeeCapacity'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetMaximumAttendeeCapacity(array $value) : void
    {
        $this->NudgePropertyWithUniqueIntegers(
            'maximumAttendeeCapacity',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, OpeningHoursSpecification>
    */
    public function GetOpeningHoursSpecification() : array
    {
        /**
        * @var array<int, OpeningHoursSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'openingHoursSpecification',
            $this->RetrievePropertyValueFromData('openingHoursSpecification'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, OpeningHoursSpecification> $value
    */
    public function SetOpeningHoursSpecification(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'openingHoursSpecification',
            __METHOD__,
            $value,
            OpeningHoursSpecification::class
        );
    }

    /**
    * @return array<int, ImageObject|Photograph>
    */
    public function GetPhoto() : array
    {
        /**
        * @var array<int, ImageObject|Photograph>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'photo',
            $this->RetrievePropertyValueFromData('photo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ImageObject|Photograph> $value
    */
    public function SetPhoto(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'photo',
            __METHOD__,
            $value,
            ImageObject::class,
            Photograph::class
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetPublicAccess() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publicAccess',
            $this->RetrievePropertyValueFromData('publicAccess'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetPublicAccess(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'publicAccess',
            $value
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetSmokingAllowed() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'smokingAllowed',
            $this->RetrievePropertyValueFromData('smokingAllowed'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetSmokingAllowed(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'smokingAllowed',
            $value
        );
    }

    /**
    * @return array<int, OpeningHoursSpecification>
    */
    public function GetSpecialOpeningHoursSpecification() : array
    {
        /**
        * @var array<int, OpeningHoursSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'specialOpeningHoursSpecification',
            $this->RetrievePropertyValueFromData('specialOpeningHoursSpecification'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, OpeningHoursSpecification> $value
    */
    public function SetSpecialOpeningHoursSpecification(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'specialOpeningHoursSpecification',
            __METHOD__,
            $value,
            OpeningHoursSpecification::class
        );
    }
}
