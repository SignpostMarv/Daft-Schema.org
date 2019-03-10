<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use SignpostMarv\DaftObject\TypeUtilities as Base;

class TypeUtilities extends Base
{
    const MULTI_TYPE_COMMON__Organization__or__Person = [
        Organization::class,
        Person::class,
    ];

    const MULTI_TYPE_COMMON__string_only = [
        'string',
    ];

    const MULTI_TYPE_COMMON__int_only = [
        'integer',
    ];

    const MULTI_TYPE_COMMON__CreativeWork__or__Intangible_Trip = [
        CreativeWork::class,
        Intangible\Trip::class,
    ];

    const MULTI_TYPE_COMMON__Person = [
        Person::class,
    ];

    const MULTI_TYPE_DICT__aboutThing = [
        Thing::class,
    ];

    const MULTI_TYPE_DICT__actor = self::MULTI_TYPE_COMMON__Person;

    const MULTI_TYPE_DICT__additionalProperty = [
        Intangible\StructuredValue\PropertyValue::class,
    ];

    const MULTI_TYPE_DICT__aggregateRating = [
        Intangible\Rating\AggregateRating::class,
    ];

    const MULTI_TYPE_DICT__audience = [
        Audience::class,
    ];

    const MULTI_TYPE_DICT__author = self::MULTI_TYPE_COMMON__Organization__or__Person;

    const MULTI_TYPE_DICT__award = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__caption = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__composer = self::MULTI_TYPE_COMMON__Organization__or__Person;

    const MULTI_TYPE_DICT__director = self::MULTI_TYPE_COMMON__Person;

    const MULTI_TYPE_DICT__downvoteCount = self::MULTI_TYPE_COMMON__int_only;

    const MULTI_TYPE_DICT__duration = [
        Intangible\Quantity\Duration::class,
    ];

    const MULTI_TYPE_DICT__funder = self::MULTI_TYPE_COMMON__Organization__or__Person;

    const MULTI_TYPE_DICT__genre = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__hasPart = self::MULTI_TYPE_COMMON__CreativeWork__or__Intangible_Trip;

    const MULTI_TYPE_DICT__height = [
        Intangible\Quantity\Distance::class,
        Intangible\StructuredValue\QuantitativeValue::class,
    ];

    const MULTI_TYPE_DICT__inLanguage = [
        'string',
        Intangible\Language::class,
    ];

    const MULTI_TYPE_DICT__isAccessibleForFree = [
        'boolean',
    ];

    const MULTI_TYPE_DICT__isPartOf = self::MULTI_TYPE_COMMON__CreativeWork__or__Intangible_Trip;

    const MULTI_TYPE_DICT__issn = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__itemReviewed = [
        Thing::class,
    ];

    const MULTI_TYPE_DICT__location = [
        'string',
        Place::class,
        Intangible\StructuredValue\ContactPoint\PostalAddress::class,
    ];

    const MULTI_TYPE_DICT__material = [
        Product::class,
    ];

    const MULTI_TYPE_DICT__measurementTechnique = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__offers = [
        Offer::class,
    ];

    const MULTI_TYPE_DICT__parentItem = [
        CreativeWork\Question::class,
    ];

    const MULTI_TYPE_DICT__provider = self::MULTI_TYPE_COMMON__Organization__or__Person;

    const MULTI_TYPE_DICT__publishingPrinciples = [
        'string',
        CreativeWork::class,
    ];

    const MULTI_TYPE_DICT__review = [
        CreativeWork\Review::class,
    ];

    const MULTI_TYPE_DICT__reviewAspect = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__speakable = [
        'string',
        Intangible\SpeakableSpecification::class,
    ];

    const MULTI_TYPE_DICT__sponsor = self::MULTI_TYPE_COMMON__Organization__or__Person;

    const MULTI_TYPE_DICT__thumbnail = [
        CreativeWork\MediaObject\ImageObject::class,
    ];

    const MULTI_TYPE_DICT__transcript = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__translators = self::MULTI_TYPE_COMMON__Organization__or__Person;

    const MULTI_TYPE_DICT__typicalAgeRange = self::MULTI_TYPE_COMMON__string_only;

    const MULTI_TYPE_DICT__upvoteCount = self::MULTI_TYPE_COMMON__int_only;

    const MULTI_TYPE_DICT__valueReference = [
        Intangible\Enumeration\QualitativeValue::class,
        Intangible\Enumeration::class,
        Intangible\StructuredValue\PropertyValue::class,
        Intangible\StructuredValue\QuantitativeValue::class,
        Intangible\StructuredValue::class,
    ];
}
