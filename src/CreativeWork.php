<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Comment;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\Comment\CorrectionComment;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\AudioObject;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\VideoObject;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Event\PublicationEvent;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\AlignmentObject;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Quantity\Duration;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\Rating;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\InteractionCounter;

/**
* @property array<int, Thing> $aboutThing
* @property array<int, string> $accessMode
* @property array<int, string> $accessModeSufficient
* @property array<int, string> $accessibilityAPI
* @property array<int, string> $accessibilityControl
* @property array<int, string> $accessibilityFeature
* @property array<int, string> $accessibilityHazard
* @property array<int, string> $accessibilitySummary
* @property array<int, Person> $accountablePerson
* @property array<int, AggregateRating> $aggregateRating
* @property array<int, string> $alternativeHeadline
* @property array<int, MediaObject> $associatedMedia
* @property array<int, Audience> $audience
* @property array<int, AudioObject> $audio
* @property array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $author
* @property array<int, string> $award
* @property array<int, Person> $character
* @property array<int, string|CreativeWork> $citation
* @property array<int, Comment> $comment
* @property array<int, int> $commentCount
* @property array<int, Place> $contentLocation
* @property array<int, Rating> $contentRating
* @property array<int, DateTime> $contentReferenceTime
* @property array<int, Organization|Person> $contributor
* @property array<int, Organization|Person> $copyrightHolder
* @property array<int, int> $copyrightYear
* @property array<int, string|CorrectionComment> $correction
* @property array<int, Organization|Person> $creator
* @property array<int, Date|DateTime> $dateCreated
* @property array<int, Date|DateTime> $dateModified
* @property array<int, Date|DateTime> $datePublished
* @property array<int, string> $discussionUrl
* @property array<int, Person> $editor
* @property array<int, AlignmentObject> $educationalAlignment
* @property array<int, string> $educationalUse
* @property array<int, MediaObject> $encoding
* @property array<int, string> $encodingFormat
* @property array<int, CreativeWork> $exampleOfWork
* @property array<int, Date> $expires
* @property array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $funder
* @property array<int, string> $genre
* @property array<int, CreativeWork|Intangible\Trip> $hasPart
* @property array<int, string> $headline
* @property array<int, string|Language> $inLanguage
* @property array<int, InteractionCounter> $interactionStatistic
* @property array<int, string> $interactivityType
* @property array<int, bool> $isAccessibleForFree
* @property array<int, string|CreativeWork|Product> $isBasedOn
* @property array<int, bool> $isFamilyFriendly
* @property array<int, CreativeWork|Intangible\Trip> $isPartOf
* @property array<int, string> $keywords
* @property array<int, string> $learningResourceType
* @property array<int, string|CreativeWork> $license
* @property array<int, string|Place|PostalAddress> $location
* @property array<int, Place> $locationCreated
* @property array<int, Thing> $mainEntity
* @property array<int, Product> $material
* @property array<int, Thing> $mentions
* @property array<int, Offer> $offers
* @property array<int, int|string> $position
* @property array<int, Organization|Person> $producer
* @property array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $provider
* @property array<int, PublicationEvent> $publication
* @property array<int, Organization|Person> $publisher
* @property array<int, Organization> $publisherImprint
* @property array<int, string|CreativeWork> $publishingPrinciples
* @property array<int, Event> $recordedAt
* @property array<int, PublicationEvent> $releasedEvent
* @property array<int, Review> $review
* @property array<int, string> $schemaVersion
* @property array<int, Date> $sdDatePublished
* @property array<int, string|CreativeWork> $sdLicense
* @property array<int, Organization|Person> $sdPublisher
* @property array<int, Organization> $sourceOrganization
* @property array<int, Place> $spatialCoverage
* @property array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $sponsor
* @property array<int, string|DateTime> $temporalCoverage
* @property array<int, string> $text
* @property array<int, string> $thumbnailUrl
* @property array<int, Duration> $timeRequired
* @property array<int, CreativeWork> $translationOfWork
* @property array<int, \SignpostMarv\DaftObject\SchemaOrg\Organization|\SignpostMarv\DaftObject\SchemaOrg\Person> $translators
* @property array<int, string> $typicalAgeRange
* @property array<int, int|string> $version
* @property array<int, VideoObject> $video
* @property array<int, CreativeWork> $workExample
* @property array<int, CreativeWork> $workTranslation
*/
class CreativeWork extends Thing
{
    use DaftObjectTraits\HasAboutThing;
    use DaftObjectTraits\HasAggregateRating;
    use DaftObjectTraits\HasAudience;
    use DaftObjectTraits\HasAuthor;
    use DaftObjectTraits\HasAward;
    use DaftObjectTraits\HasFunder;
    use DaftObjectTraits\Genre;
    use DaftObjectTraits\HasHasPart;
    use DaftObjectTraits\HasInLanguage;
    use DaftObjectTraits\HasIsAccessibleForFree;
    use DaftObjectTraits\HasMaterial;
    use DaftObjectTraits\HasOffers;
    use DaftObjectTraits\HasProvider;
    use DaftObjectTraits\HasPublishingPrinciples;
    use DaftObjectTraits\HasReview;
    use DaftObjectTraits\HasSponsors;
    use DaftObjectTraits\HasTranslators;
    use DaftObjectTraits\HasTypicalAgeRanges;

    const SCHEMA_ORG_TYPE = 'CreativeWork';

    const PROPERTIES = [
        'about',
        'accessMode',
        'accessModeSufficient',
        'accessibilityAPI',
        'accessibilityControl',
        'accessibilityFeature',
        'accessibilityHazard',
        'accessibilitySummary',
        'accountablePerson',
        'aggregateRating',
        'alternativeHeadline',
        'associatedMedia',
        'audience',
        'audio',
        'author',
        'award',
        'character',
        'citation',
        'comment',
        'commentCount',
        'contentLocation',
        'contentRating',
        'contentReferenceTime',
        'contributor',
        'copyrightHolder',
        'copyrightYear',
        'correction',
        'creator',
        'dateCreated',
        'dateModified',
        'datePublished',
        'discussionUrl',
        'editor',
        'educationalAlignment',
        'educationalUse',
        'encoding',
        'encodingFormat',
        'exampleOfWork',
        'expires',
        'funder',
        'genre',
        'hasPart',
        'headline',
        'inLanguage',
        'interactionStatistic',
        'interactivityType',
        'isAccessibleForFree',
        'isBasedOn',
        'isFamilyFriendly',
        'isPartOf',
        'keywords',
        'learningResourceType',
        'license',
        'locationCreated',
        'mainEntity',
        'material',
        'mentions',
        'offers',
        'position',
        'producer',
        'provider',
        'publication',
        'publisher',
        'publisherImprint',
        'publishingPrinciples',
        'recordedAt',
        'releasedEvent',
        'review',
        'schemaVersion',
        'sdDatePublished',
        'sdLicense',
        'sdPublisher',
        'sourceOrganization',
        'spatialCoverage',
        'sponsor',
        'temporalCoverage',
        'text',
        'thumbnailUrl',
        'timeRequired',
        'translationOfWork',
        'translator',
        'typicalAgeRange',
        'version',
        'video',
        'workExample',
        'workTranslation',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'aboutThing' => TypeUtilities::MULTI_TYPE_DICT__aboutThing,
        'accessMode' => [
            'string',
        ],
        'accessModeSufficient' => [
            'string',
        ],
        'accessibilityAPI' => [
            'string',
        ],
        'accessibilityControl' => [
            'string',
        ],
        'accessibilityFeature' => [
            'string',
        ],
        'accessibilityHazard' => [
            'string',
        ],
        'accessibilitySummary' => [
            'string',
        ],
        'accountablePerson' => [
            Person::class,
        ],
        'aggregateRating' => TypeUtilities::MULTI_TYPE_DICT__aggregateRating,
        'alternativeHeadline' => [
            'string',
        ],
        'associatedMedia' => [
            MediaObject::class,
        ],
        'audience' => TypeUtilities::MULTI_TYPE_DICT__audience,
        'audio' => [
            AudioObject::class,
        ],
        'author' => TypeUtilities::MULTI_TYPE_DICT__author,
        'award' => TypeUtilities::MULTI_TYPE_DICT__award,
        'character' => [
            Person::class,
        ],
        'citation' => [
            'string',
            CreativeWork::class,
        ],
        'comment' => [
            Comment::class,
        ],
        'commentCount' => [
            'integer',
        ],
        'contentLocation' => [
            Place::class,
        ],
        'contentRating' => [
            Rating::class,
        ],
        'contentReferenceTime' => [
            DateTime::class,
        ],
        'contributor' => [
            Organization::class,
            Person::class,
        ],
        'copyrightHolder' => [
            Organization::class,
            Person::class,
        ],
        'copyrightYear' => [
            'integer',
        ],
        'correction' => [
            'string',
            CorrectionComment::class,
        ],
        'creator' => [
            Organization::class,
            Person::class,
        ],
        'dateCreated' => [
            Date::class,
            DateTime::class,
        ],
        'dateModified' => [
            Date::class,
            DateTime::class,
        ],
        'datePublished' => [
            Date::class,
            DateTime::class,
        ],
        'discussionUrl' => [
            'string',
        ],
        'editor' => [
            Person::class,
        ],
        'educationalAlignment' => [
            AlignmentObject::class,
        ],
        'educationalUse' => [
            'string',
        ],
        'encoding' => [
            MediaObject::class,
        ],
        'encodingFormat' => [
            'string',
        ],
        'exampleOfWork' => [
            CreativeWork::class,
        ],
        'expires' => [
            Date::class,
        ],
        'funder' => TypeUtilities::MULTI_TYPE_DICT__funder,
        'genre' => TypeUtilities::MULTI_TYPE_DICT__genre,
        'hasPart' => TypeUtilities::MULTI_TYPE_DICT__hasPart,
        'headline' => [
            'string',
        ],
        'inLanguage' => [
            'string',
            Intangible\Language::class,
        ],
        'interactionStatistic' => [
            InteractionCounter::class,
        ],
        'interactivityType' => [
            'string',
        ],
        'isAccessibleForFree' => TypeUtilities::MULTI_TYPE_DICT__isAccessibleForFree,
        'isBasedOn' => [
            'string',
            CreativeWork::class,
            Product::class,
        ],
        'isFamilyFriendly' => [
            'boolean',
        ],
        'keywords' => [
            'string',
        ],
        'learningResourceType' => [
            'string',
        ],
        'license' => [
            'string',
            CreativeWork::class,
        ],
        'location' => TypeUtilities::MULTI_TYPE_DICT__location,
        'locationCreated' => [
            Place::class,
        ],
        'mainEntity' => [
            Thing::class,
        ],
        'material' => TypeUtilities::MULTI_TYPE_DICT__material,
        'mentions' => [
            Thing::class,
        ],
        'offers' => TypeUtilities::MULTI_TYPE_DICT__offers,
        'position' => [
            'integer',
            'string',
        ],
        'producer' => [
            Organization::class,
            Person::class,
        ],
        'provider' => TypeUtilities::MULTI_TYPE_DICT__provider,
        'publication' => [
            PublicationEvent::class,
        ],
        'publisher' => [
            Organization::class,
            Person::class,
        ],
        'publisherImprint' => [
            Organization::class,
        ],
        'publishingPrinciples' => TypeUtilities::MULTI_TYPE_DICT__publishingPrinciples,
        'recordedAt' => [
            Event::class,
        ],
        'releasedEvent' => [
            PublicationEvent::class,
        ],
        'review' => TypeUtilities::MULTI_TYPE_DICT__review,
        'schemaVersion' => [
            'string',
        ],
        'sdDatePublished' => [
            Date::class,
        ],
        'sdLicense' => [
            'string',
            CreativeWork::class,
        ],
        'sdPublisher' => [
            Organization::class,
            Person::class,
        ],
        'sourceOrganization' => [
            Organization::class,
        ],
        'spatialCoverage' => [
            Place::class,
        ],
        'sponsor' => TypeUtilities::MULTI_TYPE_DICT__sponsor,
        'temporalCoverage' => [
            'string',
            DateTime::class,
        ],
        'text' => [
            'string',
        ],
        'thumbnailUrl' => [
            'string',
        ],
        'timeRequired' => [
            Duration::class,
        ],
        'translationOfWork' => [
            CreativeWork::class,
        ],
        'translators' => [
            Organization::class,
            Person::class,
        ],
        'typicalAgeRange' => TypeUtilities::MULTI_TYPE_DICT__typicalAgeRange,
        'version' => [
            'integer',
            'string',
        ],
        'video' => [
            VideoObject::class,
        ],
        'workExample' => [
            CreativeWork::class,
        ],
        'workTranslation' => [
            CreativeWork::class,
        ],
    ];

    /**
    * @return array<int, string>
    */
    public function GetAccessMode() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessMode',
            $this->RetrievePropertyValueFromData('accessMode'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessMode(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessMode',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAccessModeSufficient() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessModeSufficient',
            $this->RetrievePropertyValueFromData('accessModeSufficient'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessModeSufficient(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessModeSufficient',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAccessibilityAPI() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessibilityAPI',
            $this->RetrievePropertyValueFromData('accessibilityAPI'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessibilityAPI(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessibilityAPI',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAccessibilityControl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessibilityControl',
            $this->RetrievePropertyValueFromData('accessibilityControl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessibilityControl(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessibilityControl',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAccessibilityFeature() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessibilityFeature',
            $this->RetrievePropertyValueFromData('accessibilityFeature'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessibilityFeature(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessibilityFeature',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAccessibilityHazard() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessibilityHazard',
            $this->RetrievePropertyValueFromData('accessibilityHazard'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessibilityHazard(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessibilityHazard',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAccessibilitySummary() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accessibilitySummary',
            $this->RetrievePropertyValueFromData('accessibilitySummary'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAccessibilitySummary(array $value) : void
    {
        $this->NudgePropertyValue(
            'accessibilitySummary',
            $value,
            true
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetAccountablePerson() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'accountablePerson',
            $this->RetrievePropertyValueFromData('accountablePerson'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetAccountablePerson(array $value) : void
    {
        $this->NudgePropertyValue('accountablePerson', $value, true);
    }

    /**
    * @return array<int, string>
    */
    public function GetAlternativeHeadline() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'alternativeHeadline',
            $this->RetrievePropertyValueFromData('alternativeHeadline'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAlternativeHeadline(array $value) : void
    {
        $this->NudgePropertyValue(
            'alternativeHeadline',
            $value,
            true
        );
    }

    /**
    * @return array<int, MediaObject>
    */
    public function GetAssociatedMedia() : array
    {
        /**
        * @var array<int, MediaObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'associatedMedia',
            $this->RetrievePropertyValueFromData('associatedMedia'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MediaObject> $value
    */
    public function SetAssociatedMedia(array $value) : void
    {
        $this->NudgePropertyValue(
            'associatedMedia',
            $value,
            true
        );
    }

    /**
    * @return array<int, AudioObject>
    */
    public function GetAudio() : array
    {
        /**
        * @var array<int, AudioObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'audio',
            $this->RetrievePropertyValueFromData('audio'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, AudioObject> $value
    */
    public function SetAudio(array $value) : void
    {
        $this->NudgePropertyValue(
            'audio',
            $value,
            true
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetCharacter() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'character',
            $this->RetrievePropertyValueFromData('character'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetCharacter(array $value) : void
    {
        $this->NudgePropertyValue('character', $value, true);
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetCitation() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'citation',
            $this->RetrievePropertyValueFromData('citation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetCitation(array $value) : void
    {
        $this->NudgePropertyValue(
            'citation',
            $value,
            true
        );
    }

    /**
    * @return array<int, Comment>
    */
    public function GetComment() : array
    {
        /**
        * @var array<int, Comment>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'comment',
            $this->RetrievePropertyValueFromData('comment'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Comment> $value
    */
    public function SetComment(array $value) : void
    {
        $this->NudgePropertyValue(
            'comment',
            $value,
            true
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetCommentCount() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'commentCount',
            $this->RetrievePropertyValueFromData('commentCount'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetCommentCount(array $value) : void
    {
        $this->NudgePropertyValue('commentCount', $value);
    }

    /**
    * @return array<int, Place>
    */
    public function GetContentLocation() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contentLocation',
            $this->RetrievePropertyValueFromData('contentLocation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetContentLocation(array $value) : void
    {
        $this->NudgePropertyValue('contentLocation', $value, true);
    }

    /**
    * @return array<int, Rating>
    */
    public function GetContentRating() : array
    {
        /**
        * @var array<int, Rating>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contentRating',
            $this->RetrievePropertyValueFromData('contentRating'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Rating> $value
    */
    public function SetContentRating(array $value) : void
    {
        $this->NudgePropertyValue(
            'contentRating',
            $value,
            true
        );
    }

    /**
    * @return array<int, DateTime>
    */
    public function GetContentReferenceTime() : array
    {
        /**
        * @var array<int, DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contentReferenceTime',
            $this->RetrievePropertyValueFromData('contentReferenceTime'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, DateTime> $value
    */
    public function SetContentReferenceTime(array $value) : void
    {
        $this->NudgePropertyValue('contentReferenceTime', $value, true);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetContributor() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'contributor',
            $this->RetrievePropertyValueFromData('contributor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetContributor(array $value) : void
    {
        $this->NudgePropertyValue('contributor', $value, true);
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetCopyrightHolder() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'copyrightHolder',
            $this->RetrievePropertyValueFromData('copyrightHolder'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetCopyrightHolder(array $value) : void
    {
        $this->NudgePropertyValue(
            'copyrightHolder',
            $value,
            true
        );
    }

    /**
    * @return array<int, int>
    */
    public function GetCopyrightYear() : array
    {
        /**
        * @var array<int, int>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'copyrightYear',
            $this->RetrievePropertyValueFromData('copyrightYear'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int> $value
    */
    public function SetCopyrightYear(array $value) : void
    {
        $this->NudgePropertyValue('copyrightYear', $value);
    }

    /**
    * @return array<int, string|CorrectionComment>
    */
    public function GetCorrection() : array
    {
        /**
        * @var array<int, string|CorrectionComment>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'correction',
            $this->RetrievePropertyValueFromData('correction'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CorrectionComment> $value
    */
    public function SetCorrection(array $value) : void
    {
        $this->NudgePropertyValue(
            'correction',
            $value,
            true
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetCreator() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'creator',
            $this->RetrievePropertyValueFromData('creator'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetCreator(array $value) : void
    {
        $this->NudgePropertyValue('creator', $value, true);
    }

    /**
    * @return array<int, Date|DateTime>
    */
    public function GetDateCreated() : array
    {
        /**
        * @var array<int, Date|DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dateCreated',
            $this->RetrievePropertyValueFromData('dateCreated'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetDateCreated(array $value) : void
    {
        $this->NudgePropertyValue('dateCreated', $value, true);
    }

    /**
    * @return array<int, Date|DateTime>
    */
    public function GetDateModified() : array
    {
        /**
        * @var array<int, Date|DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'dateModified',
            $this->RetrievePropertyValueFromData('dateModified'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetDateModified(array $value) : void
    {
        $this->NudgePropertyValue('dateModified', $value, true);
    }

    /**
    * @return array<int, Date|DateTime>
    */
    public function GetDatePublished() : array
    {
        /**
        * @var array<int, Date|DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'datePublished',
            $this->RetrievePropertyValueFromData('datePublished'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    public function SetDatePublished(array $value) : void
    {
        $this->NudgePropertyValue('datePublished', $value, true);
    }

    /**
    * @return array<int, string>
    */
    public function GetDiscussionUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'discussionUrl',
            $this->RetrievePropertyValueFromData('discussionUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDiscussionUrl(array $value) : void
    {
        $this->NudgePropertyValue(
            'discussionUrl',
            $value,
            true
        );
    }

    /**
    * @return array<int, Person>
    */
    public function GetEditor() : array
    {
        /**
        * @var array<int, Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'editor',
            $this->RetrievePropertyValueFromData('editor'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Person> $value
    */
    public function SetEditor(array $value) : void
    {
        $this->NudgePropertyValue('editor', $value, true);
    }

    /**
    * @return array<int, AlignmentObject>
    */
    public function GetEducationalAlignment() : array
    {
        /**
        * @var array<int, AlignmentObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'educationalAlignment',
            $this->RetrievePropertyValueFromData('educationalAlignment'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, AlignmentObject> $value
    */
    public function SetEducationalAlignment(array $value) : void
    {
        $this->NudgePropertyValue(
            'educationalAlignment',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetEducationalUse() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'educationalUse',
            $this->RetrievePropertyValueFromData('educationalUse'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEducationalUse(array $value) : void
    {
        $this->NudgePropertyValue(
            'educationalUse',
            $value,
            true
        );
    }

    /**
    * @return array<int, MediaObject>
    */
    public function GetEncoding() : array
    {
        /**
        * @var array<int, MediaObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'encoding',
            $this->RetrievePropertyValueFromData('encoding'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, MediaObject> $value
    */
    public function SetEncoding(array $value) : void
    {
        $this->NudgePropertyValue(
            'encoding',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetEncodingFormat() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'encodingFormat',
            $this->RetrievePropertyValueFromData('encodingFormat'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetEncodingFormat(array $value) : void
    {
        $this->NudgePropertyValue(
            'encodingFormat',
            $value,
            true
        );
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetExampleOfWork() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'exampleOfWork',
            $this->RetrievePropertyValueFromData('exampleOfWork'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetExampleOfWork(array $value) : void
    {
        $this->NudgePropertyValue(
            'exampleOfWork',
            $value,
            true
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetExpires() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'expires',
            $this->RetrievePropertyValueFromData('expires'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetExpires(array $value) : void
    {
        $this->NudgePropertyValue(
            'expires',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetHeadline() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'headline',
            $this->RetrievePropertyValueFromData('headline'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetHeadline(array $value) : void
    {
        $this->NudgePropertyValue(
            'headline',
            $value,
            true
        );
    }

    /**
    * @return array<int, InteractionCounter>
    */
    public function GetInteractionStatistic() : array
    {
        /**
        * @var array<int, InteractionCounter>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'interactionStatistic',
            $this->RetrievePropertyValueFromData('interactionStatistic'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, InteractionCounter> $value
    */
    public function SetInteractionStatistic(array $value) : void
    {
        $this->NudgePropertyValue(
            'interactionStatistic',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetInteractivityType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'interactivityType',
            $this->RetrievePropertyValueFromData('interactivityType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetInteractivityType(array $value) : void
    {
        $this->NudgePropertyValue(
            'interactivityType',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|CreativeWork|Product>
    */
    public function GetIsBasedOn() : array
    {
        /**
        * @var array<int, string|CreativeWork|Product>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isBasedOn',
            $this->RetrievePropertyValueFromData('isBasedOn'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork|Product> $value
    */
    public function SetIsBasedOn(array $value) : void
    {
        $this->NudgePropertyValue(
            'isBasedOn',
            $value,
            true
        );
    }

    /**
    * @return array<int, bool>
    */
    public function GetIsFamilyFriendly() : array
    {
        /**
        * @var array<int, bool>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'isFamilyFriendly',
            $this->RetrievePropertyValueFromData('isFamilyFriendly'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, bool> $value
    */
    public function SetIsFamilyFriendly(array $value) : void
    {
        $this->NudgePropertyWithUniqueBooleans(
            'isFamilyFriendly',
            $value
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetKeywords() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'keywords',
            $this->RetrievePropertyValueFromData('keywords'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetKeywords(array $value) : void
    {
        $this->NudgePropertyValue(
            'keywords',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetLearningResourceType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'learningResourceType',
            $this->RetrievePropertyValueFromData('learningResourceType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetLearningResourceType(array $value) : void
    {
        $this->NudgePropertyValue(
            'learningResourceType',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetLicense() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'license',
            $this->RetrievePropertyValueFromData('license'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetLicense(array $value) : void
    {
        $this->NudgePropertyValue(
            'license',
            $value,
            true
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetLocationCreated() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'locationCreated',
            $this->RetrievePropertyValueFromData('locationCreated'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetLocationCreated(array $value) : void
    {
        $this->NudgePropertyValue('locationCreated', $value, true);
    }

    /**
    * @return array<int, Thing>
    */
    public function GetMainEntity() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'mainEntity',
            $this->RetrievePropertyValueFromData('mainEntity'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetMainEntity(array $value) : void
    {
        $this->NudgePropertyValue(
            'mainEntity',
            $value,
            true
        );
    }

    /**
    * @return array<int, Thing>
    */
    public function GetMentions() : array
    {
        /**
        * @var array<int, Thing>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'mentions',
            $this->RetrievePropertyValueFromData('mentions'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Thing> $value
    */
    public function SetMentions(array $value) : void
    {
        $this->NudgePropertyValue(
            'mentions',
            $value,
            true
        );
    }

    /**
    * @return array<int, int|string>
    */
    public function GetPosition() : array
    {
        /**
        * @var array<int, int|string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'position',
            $this->RetrievePropertyValueFromData('position'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|string> $value
    */
    public function SetPosition(array $value) : void
    {
        $this->NudgePropertyValue(
            'position',
            $value,
            true
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetProducer() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'producer',
            $this->RetrievePropertyValueFromData('producer'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetProducer(array $value) : void
    {
        $this->NudgePropertyValue('producer', $value, true);
    }

    /**
    * @return array<int, PublicationEvent>
    */
    public function GetPublication() : array
    {
        /**
        * @var array<int, PublicationEvent>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publication',
            $this->RetrievePropertyValueFromData('publication'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PublicationEvent> $value
    */
    public function SetPublication(array $value) : void
    {
        $this->NudgePropertyValue(
            'publication',
            $value,
            true
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetPublisher() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publisher',
            $this->RetrievePropertyValueFromData('publisher'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetPublisher(array $value) : void
    {
        $this->NudgePropertyValue('publisher', $value, true);
    }

    /**
    * @return array<int, Organization>
    */
    public function GetPublisherImprint() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'publisherImprint',
            $this->RetrievePropertyValueFromData('publisherImprint'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetPublisherImprint(array $value) : void
    {
        $this->NudgePropertyValue(
            'publisherImprint',
            $value,
            true
        );
    }

    /**
    * @return array<int, Event>
    */
    public function GetRecordedAt() : array
    {
        /**
        * @var array<int, Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'recordedAt',
            $this->RetrievePropertyValueFromData('recordedAt'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Event> $value
    */
    public function SetRecordedAt(array $value) : void
    {
        $this->NudgePropertyValue(
            'recordedAt',
            $value,
            true
        );
    }

    /**
    * @return array<int, PublicationEvent>
    */
    public function GetReleasedEvent() : array
    {
        /**
        * @var array<int, PublicationEvent>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'releasedEvent',
            $this->RetrievePropertyValueFromData('releasedEvent'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, PublicationEvent> $value
    */
    public function SetReleasedEvent(array $value) : void
    {
        $this->NudgePropertyValue(
            'releasedEvent',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSchemaVersion() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'schemaVersion',
            $this->RetrievePropertyValueFromData('schemaVersion'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSchemaVersion(array $value) : void
    {
        $this->NudgePropertyValue(
            'schemaVersion',
            $value,
            true
        );
    }

    /**
    * @return array<int, Date>
    */
    public function GetSdDatePublished() : array
    {
        /**
        * @var array<int, Date>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sdDatePublished',
            $this->RetrievePropertyValueFromData('sdDatePublished'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Date> $value
    */
    public function SetSdDatePublished(array $value) : void
    {
        $this->NudgePropertyValue(
            'sdDatePublished',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetSdLicense() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sdLicense',
            $this->RetrievePropertyValueFromData('sdLicense'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetSdLicense(array $value) : void
    {
        $this->NudgePropertyValue(
            'sdLicense',
            $value,
            true
        );
    }

    /**
    * @return array<int, Organization|Person>
    */
    public function GetSdPublisher() : array
    {
        /**
        * @var array<int, Organization|Person>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sdPublisher',
            $this->RetrievePropertyValueFromData('sdPublisher'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    public function SetSdPublisher(array $value) : void
    {
        $this->NudgePropertyValue('sdPublisher', $value, true);
    }

    /**
    * @return array<int, Organization>
    */
    public function GetSourceOrganization() : array
    {
        /**
        * @var array<int, Organization>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sourceOrganization',
            $this->RetrievePropertyValueFromData('sourceOrganization'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Organization> $value
    */
    public function SetSourceOrganization(array $value) : void
    {
        $this->NudgePropertyValue(
            'sourceOrganization',
            $value,
            true
        );
    }

    /**
    * @return array<int, Place>
    */
    public function GetSpatialCoverage() : array
    {
        /**
        * @var array<int, Place>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'spatialCoverage',
            $this->RetrievePropertyValueFromData('spatialCoverage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Place> $value
    */
    public function SetSpatialCoverage(array $value) : void
    {
        $this->NudgePropertyValue('spatialCoverage', $value, true);
    }

    /**
    * @return array<int, string|DateTime>
    */
    public function GetTemporalCoverage() : array
    {
        /**
        * @var array<int, string|DateTime>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'temporalCoverage',
            $this->RetrievePropertyValueFromData('temporalCoverage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|DateTime> $value
    */
    public function SetTemporalCoverage(array $value) : void
    {
        $this->NudgePropertyValue(
            'temporalCoverage',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetText() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'text',
            $this->RetrievePropertyValueFromData('text'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetText(array $value) : void
    {
        $this->NudgePropertyValue(
            'text',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetThumbnailUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'thumbnailUrl',
            $this->RetrievePropertyValueFromData('thumbnailUrl'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetThumbnailUrl(array $value) : void
    {
        $this->NudgePropertyValue(
            'thumbnailUrl',
            $value,
            true
        );
    }

    /**
    * @return array<int, Duration>
    */
    public function GetTimeRequired() : array
    {
        /**
        * @var array<int, Duration>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'timeRequired',
            $this->RetrievePropertyValueFromData('timeRequired'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Duration> $value
    */
    public function SetTimeRequired(array $value) : void
    {
        $this->NudgePropertyValue(
            'timeRequired',
            $value,
            true
        );
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetTranslationOfWork() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'translationOfWork',
            $this->RetrievePropertyValueFromData('translationOfWork'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetTranslationOfWork(array $value) : void
    {
        $this->NudgePropertyValue(
            'translationOfWork',
            $value,
            true
        );
    }

    /**
    * @return array<int, int|string>
    */
    public function GetVersion() : array
    {
        /**
        * @var array<int, int|string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'version',
            $this->RetrievePropertyValueFromData('version'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, int|string> $value
    */
    public function SetVersion(array $value) : void
    {
        $this->NudgePropertyValue(
            'version',
            $value,
            true
        );
    }

    /**
    * @return array<int, VideoObject>
    */
    public function GetVideo() : array
    {
        /**
        * @var array<int, VideoObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'video',
            $this->RetrievePropertyValueFromData('video'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, VideoObject> $value
    */
    public function SetVideo(array $value) : void
    {
        $this->NudgePropertyValue(
            'video',
            $value,
            true
        );
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetWorkExample() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'workExample',
            $this->RetrievePropertyValueFromData('workExample'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetWorkExample(array $value) : void
    {
        $this->NudgePropertyValue(
            'workExample',
            $value,
            true
        );
    }

    /**
    * @return array<int, CreativeWork>
    */
    public function GetWorkTranslation() : array
    {
        /**
        * @var array<int, CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'workTranslation',
            $this->RetrievePropertyValueFromData('workTranslation'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork> $value
    */
    public function SetWorkTranslation(array $value) : void
    {
        $this->NudgePropertyValue(
            'workTranslation',
            $value,
            true
        );
    }
}
