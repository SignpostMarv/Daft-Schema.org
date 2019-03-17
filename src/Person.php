<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Brand;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Demand;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Enumeration\GenderType;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ItemList\OfferCatalog;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Language;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Occupation;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\ProgramMembership;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Distance;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\MonetaryAmount;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\OwnershipInfo;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\QuantitativeValue;
use SignpostMarv\DaftObject\SchemaOrg\Place\AdministrativeArea\Country;

/**
* @property array<int, string> $additionalName
* @property array<int, string|PostalAddress> $address
* @property array<int, Organization> $affiliation
* @property array<int, Organization> $alumniOf
* @property array<int, string> $award
* @property array<int, Date> $birthDate
* @property array<int, Place> $birthPlace
* @property array<int, Brand|Organization> $brand
* @property array<int, Person> $children
* @property array<int, string|Person> $colleague
* @property array<int, ContactPoint> $contactPoint
* @property array<int, Date> $deathDate
* @property array<int, Place> $deathPlace
* @property array<int, string> $duns
* @property array<int, string> $email
* @property array<int, string> $familyName
* @property array<int, string> $faxNumber
* @property array<int, Person> $follows
* @property array<int, Organization|Person> $funder
* @property array<int, string|GenderType> $gender
* @property array<int, string> $givenName
* @property array<int, string> $globalLocationNumber
* @property array<int, Occupation> $hasOccupation
* @property array<int, OfferCatalog> $hasOfferCatalog
* @property array<int, Place> $hasPOS
* @property array<int, Distance|QuantitativeValue> $height
* @property array<int, ContactPoint|Place> $homeLocation
* @property array<int, string> $honorificPrefix
* @property array<int, string> $honorificSuffix
* @property array<int, string> $isicV4
* @property array<int, string> $jobTitle
* @property array<int, Person> $knows
* @property array<int, string|Thing> $knowsAbout
* @property array<int, string|Language> $knowsLanguage
* @property array<int, Offer> $makesOffer
* @property array<int, Organization|ProgramMembership> $memberOf
* @property array<int, string> $naics
* @property array<int, Country> $nationality
* @property array<int, MonetaryAmount|PriceSpecification> $netWorth
* @property array<int, Person> $parent
* @property array<int, Event> $performerIn
* @property array<int, OwnershipInfo|Product> $owns
* @property array<int, string|CreativeWork> $publishingPrinciples
* @property array<int, Person> $relatedTo
* @property array<int, Demand> $seeks
* @property array<int, Person> $sibling
* @property array<int, Organization|Person> $sponsor
* @property array<int, Person> $spouse
* @property array<int, string> $taxID
* @property array<int, string> $telephone
* @property array<int, string> $vatID
* @property array<int, QuantitativeValue> $weight
* @property array<int, ContactPoint|Place> $workLocation
* @property array<int, Organization> $worksFor
*/
class Person extends Thing
{
    use DaftObjectTraits\HasHeights;
    use DaftObjectTraits\HasAddress;
    use DaftObjectTraits\HasAward;
    use DaftObjectTraits\HasBrand;
    use DaftObjectTraits\HasContactPoint;
    use DaftObjectTraits\HasDuns;
    use DaftObjectTraits\HasEmail;
    use DaftObjectTraits\HasFaxNumber;
    use DaftObjectTraits\HasFunder;
    use DaftObjectTraits\HasGlobalLocationNumber;
    use DaftObjectTraits\HasHasOfferCatalog;
    use DaftObjectTraits\HasHasPOS;
    use DaftObjectTraits\HasIsicV4;
    use DaftObjectTraits\HasKnowsAbout;
    use DaftObjectTraits\HasKnowsLanguage;
    use DaftObjectTraits\HasMakesOffer;
    use DaftObjectTraits\HasMemberOf;
    use DaftObjectTraits\HasNaics;
    use DaftObjectTraits\HasOwns;
    use DaftObjectTraits\HasPublishingPrinciples;
    use DaftObjectTraits\HasSeeks;
    use DaftObjectTraits\HasSponsors;
    use DaftObjectTraits\HasTaxID;
    use DaftObjectTraits\HasTelephone;
    use DaftObjectTraits\HasVatID;

    const SCHEMA_ORG_TYPE = 'Person';

    const PROPERTIES = [
        'additionalName',
        'address',
        'affiliation',
        'alumniOf',
        'award',
        'birthDate',
        'birthPlace',
        'brand',
        'children',
        'colleague',
        'contactPoint',
        'deathDate',
        'deathPlace',
        'duns',
        'email',
        'familyName',
        'faxNumber',
        'follows',
        'funder',
        'gender',
        'givenName',
        'globalLocationNumber',
        'hasOccupation',
        'hasOfferCatalog',
        'hasPOS',
        'height',
        'homeLocation',
        'honorificPrefix',
        'honorificSuffix',
        'isicV4',
        'jobTitle',
        'knows',
        'knowsAbout',
        'knowsLanguage',
        'makesOffer',
        'memberOf',
        'naics',
        'nationality',
        'netWorth',
        'owns',
        'parent',
        'performerIn',
        'publishingPrinciples',
        'relatedTo',
        'seeks',
        'sibling',
        'sponsor',
        'spouse',
        'taxID',
        'telephone',
        'vatID',
        'weight',
        'workLocation',
        'worksFor',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'additionalName' => [
            'string',
        ],
        'address' => [
            'string',
            PostalAddress::class,
        ],
        'affiliation' => [
            Organization::class,
        ],
        'alumniOf' => [
            Organization::class,
        ],
        'award' => [
            'string',
        ],
        'birthDate' => [
            Date::class,
        ],
        'birthPlace' => [
            Place::class,
        ],
        'brand' => [
            Brand::class,
            Organization::class,
        ],
        'children' => [
            Person::class,
        ],
        'colleague' => [
            'string',
            Person::class,
        ],
        'contactPoint' => [
            ContactPoint::class,
        ],
        'deathDate' => [
            Date::class,
        ],
        'deathPlace' => [
            Place::class,
        ],
        'duns' => [
            'string',
        ],
        'email' => [
            'string',
        ],
        'familyName' => [
            'string',
        ],
        'faxNumber' => [
            'string',
        ],
        'follows' => [
            Person::class,
        ],
        'funder' => [
            Organization::class,
            Person::class,
        ],
        'gender' => [
            'string',
            GenderType::class,
        ],
        'givenName' => [
            'string',
        ],
        'globalLocationNumber' => [
            'string',
        ],
        'hasOccupation' => [
            Occupation::class,
        ],
        'hasOfferCatalog' => [
            OfferCatalog::class,
        ],
        'hasPOS' => [
            Place::class,
        ],
        'height' => [
            Distance::class,
            QuantitativeValue::class,
        ],
        'homeLocation' => [
            ContactPoint::class,
            Place::class,
        ],
        'honorificPrefix' => [
            'string',
        ],
        'honorificSuffix' => [
            'string',
        ],
        'isicV4' => [
            'string',
        ],
        'jobTitle' => [
            'string',
        ],
        'knows' => [
            Person::class,
        ],
        'knowsAbout' => [
            'string',
            Thing::class,
        ],
        'knowsLanguage' => [
            'string',
            Language::class,
        ],
        'makesOffer' => [
            Offer::class,
        ],
        'memberOf' => [
            Organization::class,
            ProgramMembership::class,
        ],
        'naics' => [
            'string',
        ],
        'nationality' => [
            Country::class,
        ],
        'netWorth' => [
            MonetaryAmount::class,
            PriceSpecification::class,
        ],
        'owns' => [
            OwnershipInfo::class,
            Product::class,
        ],
        'parent' => [
            Person::class,
        ],
        'performerIn' => [
            Event::class,
        ],
        'publishingPrinciples' => [
            'string',
            CreativeWork::class,
        ],
        'relatedTo' => [
            Person::class,
        ],
        'seeks' => [
            Demand::class,
        ],
        'sibling' => [
            Person::class,
        ],
        'sponsor' => [
            Organization::class,
            Person::class,
        ],
        'spouse' => [
            Person::class,
        ],
        'taxID' => [
            'string',
        ],
        'telephone' => [
            'string',
        ],
        'weight' => [
            QuantitativeValue::class,
        ],
        'workLocation' => [
            ContactPoint::class,
            Place::class,
        ],
        'worksFor' => [
            Organization::class,
        ],
        'vatID' => [
            'string',
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetAdditionalName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'additionalName',
            $this->RetrievePropertyValueFromData('additionalName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAdditionalName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'additionalName',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetAffiliation() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'affiliation',
            $this->RetrievePropertyValueFromData('affiliation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetAffiliation(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizations('affiliation', __METHOD__, $value);
    }

    /**
    * @return array<int, Organization>
    */
    public function GetAlumniOf() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'alumniOf',
            $this->RetrievePropertyValueFromData('alumniOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetAlumniOf(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizations('alumniOf', __METHOD__, $value);
    }

    /**
    * @return array<int, Date>
    */
    public function GetBirthDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'birthDate',
            $this->RetrievePropertyValueFromData('birthDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetBirthDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueDates(
            'birthDate',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetBirthPlace() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'birthPlace',
            $this->RetrievePropertyValueFromData('birthPlace'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetBirthPlace(array $value) : void
    {
        $this->NudgePropertyValueWithUniquePlaces(
            'birthPlace',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetChildren() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'children',
            $this->RetrievePropertyValueFromData('children'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetChildren(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('children', __METHOD__, $value);
    }

    /**
    * @return array<int, string|Person>
    */
    public function GetColleague() : array
    {
        /**
        * @var array<int, string|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'colleague',
            $this->RetrievePropertyValueFromData('colleague'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|Person> $value
    */
    public function SetColleague(array $value) : void
    {
        $this->NudgePropertyValue(
            'colleague',
            $value,
            true
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetDeathDate() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'deathDate',
            $this->RetrievePropertyValueFromData('deathDate'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetDeathDate(array $value) : void
    {
        $this->NudgePropertyWithUniqueDates(
            'deathDate',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetDeathPlace() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'deathPlace',
            $this->RetrievePropertyValueFromData('deathPlace'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetDeathPlace(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'deathPlace',
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetFamilyName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'familyName',
            $this->RetrievePropertyValueFromData('familyName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetFamilyName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'familyName',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetFollows() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'follows',
            $this->RetrievePropertyValueFromData('follows'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetFollows(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('follows', __METHOD__, $value);
    }

    /**
    * @return array<int, string|GenderType>
    */
    public function GetGender() : array
    {
        /**
        * @var array<int, string|GenderType>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'gender',
            $this->RetrievePropertyValueFromData('gender'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|GenderType> $value
    */
    public function SetGender(array $value) : void
    {
        $this->NudgePropertyValue(
            'gender',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetGivenName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'givenName',
            $this->RetrievePropertyValueFromData('givenName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetGivenName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'givenName',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Occupation>
    */
    public function GetHasOccupation() : array
    {
        /**
        * @var array<int, Occupation>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'hasOccupation',
            $this->RetrievePropertyValueFromData('hasOccupation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Occupation> $value
    */
    public function SetHasOccupation(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'hasOccupation',
            __METHOD__,
            $value,
            Occupation::class
        );
    }

    /**
    * @return array<int, ContactPoint|Place>
    */
    public function GetHomeLocation() : array
    {
        /**
        * @var array<int, ContactPoint|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'homeLocation',
            $this->RetrievePropertyValueFromData('homeLocation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ContactPoint|Place> $value
    */
    public function SetHomeLocation(array $value) : void
    {
        $this->NudgePropertyValueWithUniqueContactPointsOrPlaces(
            'homeLocation',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetHonorificPrefix() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'honorificPrefix',
            $this->RetrievePropertyValueFromData('honorificPrefix'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetHonorificPrefix(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'honorificPrefix',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetHonorificSuffix() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'honorificSuffix',
            $this->RetrievePropertyValueFromData('honorificSuffix'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetHonorificSuffix(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'honorificSuffix',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetJobTitle() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'jobTitle',
            $this->RetrievePropertyValueFromData('jobTitle'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetJobTitle(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
            'jobTitle',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetKnows() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'knows',
            $this->RetrievePropertyValueFromData('knows'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetKnows(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('knows', __METHOD__, $value);
    }

    /**
    * @return array<int, Country>
    */
    public function GetNationality() : array
    {
        /**
        * @var array<int, Country>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'nationality',
            $this->RetrievePropertyValueFromData('nationality'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Country> $value
    */
    public function SetNationality(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'nationality',
            __METHOD__,
            $value,
            Country::class
        );
    }

    /**
    * @return array<int, MonetaryAmount|PriceSpecification>
    */
    public function GetNetWorth() : array
    {
        /**
        * @var array<int, MonetaryAmount|PriceSpecification>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'netWorth',
            $this->RetrievePropertyValueFromData('netWorth'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MonetaryAmount|PriceSpecification> $value
    */
    public function SetNetWorth(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'netWorth',
            __METHOD__,
            $value,
            MonetaryAmount::class,
            PriceSpecification::class
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetParent() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'parent',
            $this->RetrievePropertyValueFromData('parent'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetParent(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('parent', __METHOD__, $value);
    }

    /**
    * @return array<int, Event>
    */
    public function GetPerformerIn() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'performerIn',
            $this->RetrievePropertyValueFromData('performerIn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetPerformerIn(array $value) : void
    {
        $this->NudgePropertyWithUniqueEvents('performerIn', __METHOD__, $value);
    }

    /**
    * @return array<int, Person>
    */
    public function GetRelatedTo() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'relatedTo',
            $this->RetrievePropertyValueFromData('relatedTo'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetRelatedTo(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('relatedTo', __METHOD__, $value);
    }

    /**
    * @return array<int, Person>
    */
    public function GetSibling() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sibling',
            $this->RetrievePropertyValueFromData('sibling'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetSibling(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('sibling', __METHOD__, $value);
    }

    /**
    * @return array<int, Person>
    */
    public function GetSpouse() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'spouse',
            $this->RetrievePropertyValueFromData('spouse'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetSpouse(array $value) : void
    {
        $this->NudgePropertyWithUniquePersons('spouse', __METHOD__, $value);
    }

    /**
    * @return array<int, QuantitativeValue>
    */
    public function GetWeight() : array
    {
        /**
        * @var array<int, QuantitativeValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'weight',
            $this->RetrievePropertyValueFromData('weight'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, QuantitativeValue> $value
    */
    public function SetWeight(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'weight',
            __METHOD__,
            $value,
            QuantitativeValue::class
        );
    }

    /**
    * @return array<int, ContactPoint|Place>
    */
    public function GetWorkLocation() : array
    {
        /**
        * @var array<int, ContactPoint|Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'workLocation',
            $this->RetrievePropertyValueFromData('workLocation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, ContactPoint|Place> $value
    */
    public function SetWorkLocation(array $value) : void
    {
        $this->NudgePropertyValueWithUniqueContactPointsOrPlaces(
            'workLocation',
            __METHOD__,
            $value
        );
    }

    /**
    * @return array<int, Organization>
    */
    public function GetWorksFor() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'worksFor',
            $this->RetrievePropertyValueFromData('worksFor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetWorksFor(array $value) : void
    {
        $this->NudgePropertyWithUniqueOrganizations('worksFor', __METHOD__, $value);
    }
}
