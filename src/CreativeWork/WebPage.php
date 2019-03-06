<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\CreativeWork;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork as Base;
use SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\Specialty;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList\BreadcrumbList;
use SignpostMarv\DaftObject\SchemaOrg\Organization;
use SignpostMarv\DaftObject\SchemaOrg\Person;
use SignpostMarv\DaftObject\TypeUtilities;

class WebPage extends Base
{
    use DaftObjectTraits\HasSpeakable;

    const SCHEMA_ORG_TYPE = 'WebPage';

    const PROPERTIES = [
        'breadcrumb',
        'lastReviewed',
        'mainContentOfPage',
        'primaryImageOfPage',
        'relatedLink',
        'reviewedBy',
        'significantLink',
        'speakable',
        'specialty',
    ];

    /**
    * @return array<int, string|BreadcrumbList>
    */
    public function GetBreadcrumb() : array
    {
        /**
        * @var array<int, string|BreadcrumbList>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'breadcrumb',
            $this->RetrievePropertyValueFromData('breadcrumb'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|BreadcrumbList> $value
    */
    public function SetBreadcrumb(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'breadcrumb',
            __METHOD__,
            $value,
            BreadcrumbList::class
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetLastReviewed() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'lastReviewed',
            $this->RetrievePropertyValueFromData('lastReviewed'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetLastReviewed(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'lastReviewed',
            __METHOD__,
            $value,
            Date::class
        );
    }

    /**
    * @return array<int, WebPageElement>
    */
    public function GetMainContentOfPage() : array
    {
        /**
        * @var array<int, WebPageElement>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'mainContentOf',
            $this->RetrievePropertyValueFromData('mainContentOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, WebPageElement> $value
    */
    public function SetMainContentOfPage(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'mainContentOf',
            __METHOD__,
            $value,
            WebPageElement::class
        );
    }

    /**
    * @return array<int, MediaObject\ImageObject>
    */
    public function GetPrimaryImageOfPage() : array
    {
        /**
        * @var array<int, MediaObject\ImageObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'primaryImageOfPage',
            $this->RetrievePropertyValueFromData('primaryImageOfPage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MediaObject\ImageObject> $value
    */
    public function SetPrimaryImageOfPage(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'primaryImageOfPage',
            __METHOD__,
            $value,
            MediaObject\ImageObject::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetRelatedLink() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'relatedLink',
            $this->RetrievePropertyValueFromData('relatedLink'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetRelatedLink(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'relatedLink',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetReviewedBy() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'reviewedBy',
            $this->RetrievePropertyValueFromData('reviewedBy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetReviewedBy(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizationsOrPersons(
            'reviewedBy',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSignificantLink() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'significantLink',
            $this->RetrievePropertyValueFromData('significantLink'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSignificantLink(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'significantLink',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Specialty>
    */
    public function GetSpecialty() : array
    {
        /**
        * @var array<int, Specialty>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'specialty',
            $this->RetrievePropertyValueFromData('specialty'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Specialty> $value
    */
    public function SetSpecialty(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'specialty',
            __METHOD__,
            $value,
            Specialty::class
        );
    }
}
