<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Article;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Review;
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
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea;

/**
* @property array<int, string|CreativeWork> $actionableFeedbackPolicy
* @property array<int, string|PostalAddress> $address
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, Person> $alumni
* @property array<int, string|AdministrativeArea|GeoShape|Place> $areaServed
* @property array<int, string> $award
* @property array<int, Brand|Organization> $brand
* @property array<int, ContactPoint> $contactPoint
* @property array<int, string|CreativeWork> $correctionsPolicy
* @property array<int, Organization> $department
* @property array<int, Date> $dissolutionDate
* @property array<int, string|CreativeWork> $diversityPolicy
* @property array<int, string|Article> $diversityStaffingReport
* @property array<int, string> $duns
* @property array<int, string> $email
* @property array<int, Person> $employee
* @property array<int, string|CreativeWork> $ethicsPolicy
* @property array<int, Event> $event
* @property array<int, string> $faxNumber
* @property array<int, Person> $founder
* @property array<int, Date> $foundingDate
* @property array<int, Place> $foundingLocation
* @property array<int, Organization|Person> $funder
* @property array<int, string> $globalLocationNumber
* @property array<int, OfferCatalog> $hasOfferCatalog
* @property array<int, Place> $hasPOS
* @property array<int, string> $isicV4
* @property array<int, string|Thing> $knowsAbout
* @property array<int, string|Language> $knowsLanguage
* @property array<int, string> $legalName
* @property array<int, string> $leiCode
* @property array<int, string|Place|PostalAddress> $location
* @property array<int, ImageObject> $logo
* @property array<int, Offer> $makesOffer
* @property array<int, Organization|Person> $member
* @property array<int, Organization|ProgramMembership> $memberOf
* @property array<int, string> $naics
* @property array<int, QuantitativeValue> $numberOfEmployees
* @property array<int, string|AboutPage|CreativeWork> $ownershipFundingInfo
* @property array<int, OwnershipInfo|Product> $owns
* @property array<int, Organization> $parentOrganization
* @property array<int, string|CreativeWork> $publishingPrinciples
* @property array<int, Review> $review
* @property array<int, Demand> $seeks
* @property array<int, Organization|Person> $sponsor
* @property array<int, Organization> $subOrganization
* @property array<int, string> $taxID
* @property array<int, string> $telephone
* @property array<int, string|CreativeWork> $unnamedSourcesPolicy
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
        'actionableFeedbackPolicy' => [
            'string',
            CreativeWork::class,
        ],
        'address' => [
            'string',
            PostalAddress::class,
        ],
        'aggregateRating' => [
            AggregateRating::class,
        ],
        'alumni' => [
            Person::class,
        ],
        'areaServed' => [
            'string',
            AdministrativeArea::class,
            GeoShape::class,
            Place::class,
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
        'correctionsPolicy' => [
            'string',
            CreativeWork::class,
        ],
        'department' => [
            Organization::class,
        ],
        'dissolutionDate' => [
            Date::class,
        ],
        'diversityPolicy' => [
            'string',
            CreativeWork::class,
        ],
        'diversityStaffingReport' => [
            'string',
            Article::class,
        ],
        'duns' => [
            'string',
        ],
        'email' => [
            'string',
        ],
        'employee' => [
            Person::class,
        ],
        'ethicsPolicy' => [
            'string',
            CreativeWork::class,
        ],
        'event' => [
            Event::class,
        ],
        'faxNumber' => [
            'string',
        ],
        'founder' => [
            Person::class,
        ],
        'foundingDate' => [
            Date::class,
        ],
        'foundingLocation' => [
            Place::class,
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
        'isicV4' => [
            'string',
        ],
        'knowsAbout' => [
            'string',
            Thing::class,
        ],
        'knowsLanguage' => [
            'string',
            Language::class,
        ],
        'legalName' => [
            'string',
        ],
        'leiCode' => [
            'string',
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
        'numberOfEmployees' => [
            QuantitativeValue::class,
        ],
        'ownershipFundingInfo' => [
            'string',
            AboutPage::class,
            CreativeWork::class,
        ],
        'owns' => [
            OwnershipInfo::class,
            Product::class,
        ],
        'parentOrganization' => [
            Organization::class,
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
        'subOrganization' => [
            Organization::class,
        ],
        'taxID' => [
            'string',
        ],
        'telephone' => [
            'string',
        ],
        'unnamedSourcesPolicy' => [
            'string',
            CreativeWork::class,
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
        $out = $this->ExpectRetrievedValueIsArray('actionableFeedbackPolicy');

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetActionableFeedbackPolicy(array $value) : void
    {
        $this->NudgePropertyValue('actionableFeedbackPolicy', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Person>
    */
    public function GetAlumni() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = $this->ExpectRetrievedValueIsArray('alumni');

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetAlumni(array $value) : void
    {
        $this->NudgePropertyValue('alumni', $value);
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetCorrectionsPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray('correctionsPolicy');

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetCorrectionsPolicy(array $value) : void
    {
        $this->NudgePropertyValue('correctionsPolicy', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Organization>
    */
    public function GetDepartment() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = $this->ExpectRetrievedValueIsArray('department');

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetDepartment(array $value) : void
    {
        $this->NudgePropertyValue('department', $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetDissolutionDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = $this->ExpectRetrievedValueIsArray('dissolutionDate');

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetDissolutionDate(array $value) : void
    {
        $this->NudgePropertyValue('dissolutionDate', $value);
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetDiversityPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray('diversityPolicy');

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetDiversityPolicy(array $value) : void
    {
        $this->NudgePropertyValue('diversityPolicy', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string|Article>
    */
    public function GetDiversityStaffingReport() : array
    {
        /**
        * @var array<int, string|Article>
        */
        $out = $this->ExpectRetrievedValueIsArray('diversityStaffingReport');

        return $out;
    }

    /**
    * @param array<int, string|Article> $value
    */
    public function SetDiversityStaffingReport(array $value) : void
    {
        $this->NudgePropertyValue('diversityStaffingReport', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Person>
    */
    public function GetEmployee() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = $this->ExpectRetrievedValueIsArray('employee');

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetEmployee(array $value) : void
    {
        $this->NudgePropertyValue('employee', $value);
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetEthicsPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray('ethicsPolicy');

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetEthicsPolicy(array $value) : void
    {
        $this->NudgePropertyValue('ethicsPolicy', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Person>
    */
    public function GetFounder() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = $this->ExpectRetrievedValueIsArray('founder');

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetFounder(array $value) : void
    {
        $this->NudgePropertyValue('founder', $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetFoundingDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = $this->ExpectRetrievedValueIsArray('foundingDate');

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetFoundingDate(array $value) : void
    {
        $this->NudgePropertyValue('foundingDate', $value);
    }

    /**
    * @return array<int, Place>
    */
    public function GetFoundingLocation() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = $this->ExpectRetrievedValueIsArray('foundingLocation');

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetFoundingLocation(array $value) : void
    {
        $this->NudgePropertyValue('foundingLocation', $value);
    }

    /**
    * @return array<int, string>
    */
    public function GetLegalName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('legalName');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLegalName(array $value) : void
    {
        $this->NudgePropertyValue('legalName', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string>
    */
    public function GetLeiCode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('leiCode');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLeiCode(array $value) : void
    {
        $this->NudgePropertyValue('leiCode', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetNumberOfEmployees() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = $this->ExpectRetrievedValueIsArray('numberOfEmployees');

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetNumberOfEmployees(array $value) : void
    {
        $this->NudgePropertyValue('numberOfEmployees', $value);
    }

    /**
    * @return array<int, string|AboutPage|CreativeWork>
    */
    public function GetOwnershipFundingInfo() : array
    {
        /**
        * @var array<int, string|AboutPage|CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray('ownershipFundingInfo');

        return $out;
    }

    /**
    * @param array<int, string|AboutPage|CreativeWork> $value
    */
    public function SetOwnershipFundingInfo(array $value) : void
    {
        $this->NudgePropertyValue('ownershipFundingInfo', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Organization>
    */
    public function GetParentOrganization() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = $this->ExpectRetrievedValueIsArray('parentOrganization');

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetParentOrganization(array $value) : void
    {
        $this->NudgePropertyValue('parentOrganization', $value);
    }

    /**
    * @return array<int, Organization>
    */
    public function GetSubOrganization() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = $this->ExpectRetrievedValueIsArray('subOrganization');

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetSubOrganization(array $value) : void
    {
        $this->NudgePropertyValue('subOrganization', $value);
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetUnnamedSourcesPolicy() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray('unnamedSourcesPolicy');

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetUnnamedSourcesPolicy(array $value) : void
    {
        $this->NudgePropertyValue('unnamedSourcesPolicy', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }
}
