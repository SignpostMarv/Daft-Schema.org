<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Article;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\WebPage\AboutPage;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Brand;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Demand;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList\OfferCatalog;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Language;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ProgramMembership;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating\AggregateRating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OwnershipInfo;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;

/**
* @property array<int, string|PostalAddress> $address
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, string> $award
* @property array<int, Brand|Organization> $brand
* @property array<int, ContactPoint> $contactPoint
* @property array<int, string> $duns
* @property array<int, string> $email
* @property array<int, string> $faxNumber
* @property array<int, Organization|Person> $funder
* @property array<int, string> $globalLocationNumber
* @property array<int, OfferCatalog> $hasOfferCatalog
* @property array<int, Place> $hasPOS
* @property array<int, string|Thing> $knowsAbout
* @property array<int, string|Language> $knowsLanguage
* @property array<int, string|Place|PostalAddress> $location
* @property array<int, ImageObject> $logo
* @property array<int, Offer> $makesOffer
* @property array<int, Organization|Person> $member
* @property array<int, Organization|ProgramMembership> $memberOf
* @property array<int, string> $naics
* @property array<int, OwnershipInfo|Product> $owns
* @property array<int, string|CreativeWork> $publishingPrinciples
* @property array<int, Review> $review
* @property array<int, Demand> $seeks
* @property array<int, Organization|Person> $sponsor
* @property array<int, string> $taxID
* @property array<int, string> $telephone
* @property array<int, string> $vatID
*/
class Organization extends Thing
{
    use DaftObjectTraits\HasAddress;
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasAreaServed;
    use DaftObjectTraits\HasAward;
    use DaftObjectTraits\HasBrand;
    use DaftObjectTraits\HasContactPoint;
    use DaftObjectTraits\HasDuns;
    use DaftObjectTraits\HasEmail;
    use DaftObjectTraits\HasEvent;
    use DaftObjectTraits\HasFaxNumber;
    use DaftObjectTraits\HasFunder;
    use DaftObjectTraits\HasGlobalLocationNumber;
    use DaftObjectTraits\HasHasOfferCatalog;
    use DaftObjectTraits\HasHasPOS;
    use DaftObjectTraits\HasIsicV4;
    use DaftObjectTraits\HasKnowsAbout;
    use DaftObjectTraits\HasKnowsLanguage;
    use DaftObjectTraits\HasLocation;
    use DaftObjectTraits\HasLogo;
    use DaftObjectTraits\HasMakesOffer;
    use DaftObjectTraits\HasMember;
    use DaftObjectTraits\HasMemberOf;
    use DaftObjectTraits\HasNaics;
    use DaftObjectTraits\HasOwns;
    use DaftObjectTraits\HasPublishingPrinciples;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\HasSeeks;
    use DaftObjectTraits\HasSponsors;
    use DaftObjectTraits\HasTaxID;
    use DaftObjectTraits\HasTelephone;
    use DaftObjectTraits\HasVatID;

    const SCHEMA_ORG_TYPE = 'Organization';

    const PROPERTIES = [
        'actionableFeedbackPolicy',
        'address',
        'aggregateRating',
        'alumni',
        'areaServed',
        'award',
        'brand',
        'contactPoint',
        'correctionsPolicy',
        'department',
        'dissolutionDate',
        'diversityPolicy',
        'diversityStaffingReport',
        'duns',
        'email',
        'employee',
        'ethicsPolicy',
        'event',
        'faxNumber',
        'founder',
        'foundingDate',
        'foundingLocation',
        'funder',
        'globalLocationNumber',
        'hasOfferCatalog',
        'hasPOS',
        'isicV4',
        'knowsAbout',
        'knowsLanguage',
        'legalName',
        'leiCode',
        'location',
        'logo',
        'makesOffer',
        'member',
        'memberOf',
        'naics',
        'numberOfEmployees',
        'ownershipFundingInfo',
        'owns',
        'parentOrganization',
        'publishingPrinciples',
        'review',
        'seeks',
        'sponsor',
        'subOrganization',
        'taxID',
        'telephone',
        'unnamedSourcesPolicy',
        'vatID',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'address' => [
            'string',
            PostalAddress::class,
        ],
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'award' => [
            'string',
        ],
        'brand' => [
            Brand::class,
            Organization::class,
        ],
        'contactPoint' => [
            ContactPoint::class,
        ],
        'duns' => [
            'string',
        ],
        'email' => [
            'string',
        ],
        'faxNumber' => [
            'string',
        ],
        'funder' => [
            Organization::class,
            Person::class,
        ],
        'globalLocationNumber' => [
            'string',
        ],
        'hasOfferCatalog' => [
            OfferCatalog::class,
        ],
        'hasPOS' => [
            Place::class,
        ],
        'knowsAbout' => [
            'string',
            Thing::class,
        ],
        'knowsLanguage' => [
            'string',
            Language::class,
        ],
        'location' => [
            'string',
            Place::class,
            PostalAddress::class,
        ],
        'logo' => [
            ImageObject::class,
        ],
        'makesOffer' => [
            Offer::class,
        ],
        'member' => [
            Organization::class,
            Person::class,
        ],
        'memberOf' => [
            Organization::class,
            ProgramMembership::class,
        ],
        'naics' => [
            'string',
        ],
        'owns' => [
            OwnershipInfo::class,
            Product::class,
        ],
        'publishingPrinciples' => [
            'string',
            CreativeWork::class,
        ],
        'review' => [
            Review::class,
        ],
        'seeks' => [
            Demand::class,
        ],
        'sponsor' => [
            Organization::class,
            Person::class,
        ],
        'taxID' => [
            'string',
        ],
        'telephone' => [
            'string',
        ],
        'vatID' => [
            'string',
        ],
    ];

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetActionableFeedbackPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'actionableFeedbackPolicy',
            $this->RetrievePropertyValueFromData('actionableFeedbackPolicy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetActionableFeedbackPolicy(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'actionableFeedbackPolicy',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetAlumni() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'alumni',
            $this->RetrievePropertyValueFromData('alumni'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetAlumni(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'alumni',
            __METHOD__,
            $value,
            Person::class
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetCorrectionsPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'correctionsPolicy',
            $this->RetrievePropertyValueFromData('correctionsPolicy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetCorrectionsPolicy(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'correctionsPolicy',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetDepartment() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'department',
            $this->RetrievePropertyValueFromData('department'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetDepartment(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'department',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetDissolutionDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dissolutionDate',
            $this->RetrievePropertyValueFromData('dissolutionDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetDissolutionDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'dissolutionDate',
            __METHOD__,
            $value,
            Date::class
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetDiversityPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'diversityPolicy',
            $this->RetrievePropertyValueFromData('diversityPolicy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetDiversityPolicy(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'diversityPolicy',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, string|Article>
    */
    public function GetDiversityStaffingReport() : array
    {
        /**
        * @var array<int, string|Article>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'diversityStaffingReport',
            $this->RetrievePropertyValueFromData('diversityStaffingReport'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Article> $value
    */
    public function SetDiversityStaffingReport(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'diversityStaffingReport',
            __METHOD__,
            $value,
            Article::class
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetEmployee() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'employee',
            $this->RetrievePropertyValueFromData('employee'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetEmployee(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'employee',
            __METHOD__,
            $value,
            Person::class
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetEthicsPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'ethicsPolicy',
            $this->RetrievePropertyValueFromData('ethicsPolicy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetEthicsPolicy(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'ethicsPolicy',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetFounder() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'founder',
            $this->RetrievePropertyValueFromData('founder'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetFounder(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'founder',
            __METHOD__,
            $value,
            Person::class
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetFoundingDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'foundingDate',
            $this->RetrievePropertyValueFromData('foundingDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetFoundingDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'foundingDate',
            __METHOD__,
            $value,
            Date::class
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetFoundingLocation() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'foundingLocation',
            $this->RetrievePropertyValueFromData('foundingLocation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetFoundingLocation(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'foundingLocation',
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetLegalName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'legalName',
            $this->RetrievePropertyValueFromData('legalName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLegalName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'legalName',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetLeiCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'leiCode',
            $this->RetrievePropertyValueFromData('leiCode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLeiCode(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'leiCode',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetNumberOfEmployees() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'numberOfEmployees',
            $this->RetrievePropertyValueFromData('numberOfEmployees'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetNumberOfEmployees(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'numberOfEmployees',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, string|AboutPage|CreativeWork>
    */
    public function GetOwnershipFundingInfo() : array
    {
        /**
        * @var array<int, string|AboutPage|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'diversityStaffingReport',
            $this->RetrievePropertyValueFromData('diversityStaffingReport'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|AboutPage|CreativeWork> $value
    */
    public function SetOwnershipFundingInfo(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'diversityStaffingReport',
            __METHOD__,
            $value,
            AboutPage::class,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetParentOrganization() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'parentOrganization',
            $this->RetrievePropertyValueFromData('parentOrganization'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetParentOrganization(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'parentOrganization',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetSubOrganization() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'subOrganization',
            $this->RetrievePropertyValueFromData('subOrganization'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetSubOrganization(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'subOrganization',
            __METHOD__,
            $value,
            Organization::class
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetUnnamedSourcesPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'unnamedSourcesPolicy',
            $this->RetrievePropertyValueFromData('unnamedSourcesPolicy'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetUnnamedSourcesPolicy(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'unnamedSourcesPolicy',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }
}
