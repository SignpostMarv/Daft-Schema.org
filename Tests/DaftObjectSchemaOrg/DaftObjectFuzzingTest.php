<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests\DaftObjectSchemaOrg;

use CallbackFilterIterator;
use Generator;
use RecursiveCallbackFilterIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use ReflectionClassConstant;
use RuntimeException;
use SignpostMarv\DaftObject\DefinitionAssistant;
use SignpostMarv\DaftObject\SchemaOrg;
use SignpostMarv\DaftObject\SchemaOrg\Tests\DataProviderTrait;
use SignpostMarv\DaftObject\SchemaOrgLookup\Lookup_a2b5f59b072eb4f0e36f78a746b715700e835d2e9c730b70f6a3227ea7e43dbe964c346da3d654c7a5aa9631a79f6c57d702a01474263806629abb2a304f77e1 as SchemaOrgLookupThing;
use SignpostMarv\DaftObject\SchemaOrgLookup\LookupInterface;
use SignpostMarv\DaftObject\Tests\DaftObject\DaftObjectFuzzingTest as Base;

class DaftObjectFuzzingTest extends Base
{
    use DataProviderTrait;

    protected function FuzzingImplementationsViaGenerator() : Generator
    {
        $boolean = true;

        foreach (SchemaOrgLookupThing::ObtainClasses() as $class) {
            $args = [];

            if ((new ReflectionClass($class))->isAbstract()) {
                continue;
            }

            foreach ($class::PROPERTIES_WITH_MULTI_TYPED_ARRAYS as $arg => $spec) {
                $args[$arg] = [];

                foreach ($spec as $type) {
                    if ('string' === $type) {
                        $args[$arg][] = static::FuzzFreshStringforSchemaOrg();
                    } elseif ('integer' === $type) {
                        $args[$arg][] = random_int(0, 100);
                    } elseif ('double' === $type) {
                        $args[$arg][] = (float) random_int(0, 100);
                    } elseif ('boolean' === $type) {
                        $boolean = ! $boolean;

                        $args[$arg][] = $boolean;
                    } elseif (is_a($type, SchemaOrg\Thing::class, true)) {
                        if ((new ReflectionClass($type))->isAbstract()) {
                            $lookup =
                                '\\SignpostMarv\\DaftObject\\SchemaOrgLookup\\Lookup_' .
                                hash('sha512', $type);

                            if (is_a($lookup, LookupInterface::class, true)) {
                                foreach ($lookup::ObtainClasses() as $lookup_type) {
                                    if ((new ReflectionClass($lookup_type))->isAbstract()) {
                                        continue;
                                    }

                                    $args[$arg][] = static::FuzzFreshSchemaOrgType($lookup_type);
                                }
                            }
                        } else {
                            $args[$arg][] = static::FuzzFreshSchemaOrgType($type);
                        }
                    } elseif (SchemaOrg\DataTypes\Date::class === $type) {
                        $args[$arg][] = static::FuzzFreshSchemaOrgDate();
                    } elseif (SchemaOrg\DataTypes\Time::class === $type) {
                        $args[$arg][] = static::FuzzFreshSchemaOrgTime();
                    } elseif (SchemaOrg\DataTypes\DateTime::class === $type) {
                        $args[$arg][] = static::FuzzFreshSchemaOrgDateTime();
                    } elseif (SchemaOrg\DataTypes\DataType\Text\CssSelectorType::class === $type) {
                        $args[$arg][] = SchemaOrg\DataTypes\DataType\Text\CssSelectorType::DataTypeFromString('.foo');
                    } elseif (SchemaOrg\DataTypes\DataType\Text\XPathType::class === $type) {
                        $args[$arg][] = SchemaOrg\DataTypes\DataType\Text\XPathType::DataTypeFromString('//bar');
                    } else {
                        throw new RuntimeException('Unsupported spec type: ' . $type);
                    }
                }
            }

            yield [$class, $args];
        }

        return;

        yield [
            SchemaOrg\Thing::class,
            [
                'additionalType' => [
                    SchemaOrg\Action::SCHEMA_ORG_TYPE,
                ],
                'alternateName' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'description' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'disambiguatingDescription' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'identifier' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\StructuredValue\PropertyValue::class),
                ],
                'image' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MediaObject\ImageObject::class),
                ],
                'mainEntityOfPage' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'name' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'potentialAction' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Action::class),
                ],
                'sameAs' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'subjectOf' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Event::class),
                ],
                'url' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
            ],
        ];

        yield [
            SchemaOrg\Action::class,
            [
                'actionStatus' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Enumeration\ActionStatusType::class),
                ],
                'agent' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'endTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'error' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'instrument' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'location' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\StructuredValue\ContactPoint\PostalAddress::class
                    ),
                ],
                'object' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'participant' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'result' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'startTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'target' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\EntryPoint::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\Audience::class,
            [
                'audienceType' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'geographicArea' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place\AdministrativeArea::class),
                ],
            ],
        ];

        yield [
            SchemaOrg\CreativeWork::class,
            [
                'about' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Thing::class),
                ],
                'accessMode' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessModeSufficient' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityAPI' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityControl' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityFeature' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilityHazard' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accessibilitySummary' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'accountablePerson' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'aggregateRating' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\Intangible\Rating\AggregateRating::class
                    ),
                ],
                'alternativeHeadline' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'associatedMedia' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\MediaObject::class),
                ],
                'audience' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Audience::class),
                ],
                'audio' => [
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\MediaObject\AudioObject::class
                    ),
                ],
                'author' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'award' => [
                    static::FuzzFreshStringforSchemaOrg(),
                ],
                'character' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'citation' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork::class),
                ],
                'comment' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\CreativeWork\Comment::class),
                ],
                'commentCount' => [
                    random_int(0, 100),
                ],
                'contentLocation' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Place::class),
                ],
                'contentRating' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Intangible\Rating::class),
                ],
                'contentReferenceTime' => [
                    static::FuzzFreshSchemaOrgDateTime(),
                ],
                'contributor' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'copyrightHolder' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
                'copyrightYear' => [
                    random_int(1923, 2073),
                ],
                'correction' => [
                    static::FuzzFreshStringforSchemaOrg(),
                    static::FuzzFreshSchemaOrgType(
                        SchemaOrg\CreativeWork\Comment\CorrectionComment::class
                    ),
                ],
                'creator' => [
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Organization::class),
                    static::FuzzFreshSchemaOrgType(SchemaOrg\Person::class),
                ],
            ],
        ];
    }

    protected static function FuzzFreshSchemaOrgDate(
        string $date = 'January 1st 1970'
    ) : SchemaOrg\DataTypes\Date {
        return new SchemaOrg\DataTypes\Date($date);
    }

    protected static function FuzzFreshSchemaOrgDateTime(
        string $datetime = 'January 1st 1970 01:02:03'
    ) : SchemaOrg\DataTypes\DateTime {
        return new SchemaOrg\DataTypes\DateTime($datetime);
    }

    protected static function FuzzFreshSchemaOrgTime(
        string $time = '01:02:03'
    ) : SchemaOrg\DataTypes\Time {
        return new SchemaOrg\DataTypes\Time($time);
    }

    protected static function FuzzFreshStringforSchemaOrg(int $bytes = 4) : string
    {
        return bin2hex(random_bytes($bytes));
    }

    /**
    * @template T as SchemaOrg\Thing
    *
    * @psalm-param class-string<T> $type
    *
    * @psalm-return T
    */
    protected static function FuzzFreshSchemaOrgType(
        string $type,
        array $with_args = []
    ) : SchemaOrg\Thing {
        $with_args['identifier'] = [static::FuzzFreshStringforSchemaOrg()];

        return new $type($with_args);
    }
}
