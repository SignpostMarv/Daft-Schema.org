<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg;

use InvalidArgumentException;
use SignpostMarv\DaftObject\AbstractArrayBackedDaftObject;
use SignpostMarv\DaftObject\DaftJson;
use SignpostMarv\DaftObject\DaftObjectHasPropertiesWithMultiTypedArraysOfUniqueValues;
use SignpostMarv\DaftObject\JsonTypeUtilities;
use SignpostMarv\DaftObject\SchemaOrg\CreativeWork\MediaObject\ImageObject;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\Date;
use SignpostMarv\DaftObject\SchemaOrg\DataTypes\DateTime;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\ContactPoint;
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;

/**
* @property array<int, string> $additionalType
* @property array<int, string> $alternateName
* @property array<int, string> $description
* @property array<int, string> $disambiguatingDescription
* @property array<int, string|PropertyValue> $identifier
* @property array<int, string|ImageObject> $image
* @property array<int, string|CreativeWork> $mainEntityOfPage
* @property array<int, string> $name
* @property array<int, Action> $potentialAction
* @property array<int, string> $sameAs
* @property array<int, CreativeWork|Event> $subjectOf
* @property array<int, Action> $potentialAction
* @property array<int, string> $url
*
* @template-implements DaftJson<Thing>
*/
class Thing extends AbstractArrayBackedDaftObject implements
    DaftJson,
    DaftObjectHasPropertiesWithMultiTypedArraysOfUniqueValues
{
    const SCHEMA_ORG_CONTEXT = 'http://schema.org';

    const SCHEMA_ORG_TYPE = 'Thing';

    const PROPERTIES = [
        '@context',
        '@type',
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];

    const PROPERTIES_WITH_MULTI_TYPED_ARRAYS = [
        'additionalType' => [
            'string',
        ],
        'alternateName' => [
            'string',
        ],
        'description' => [
            'string',
        ],
        'disambiguatingDescription' => [
            'string',
        ],
        'identifier' => [
            'string',
            PropertyValue::class,
        ],
        'image' => [
            'string',
            ImageObject::class,
        ],
        'mainEntityOfPage' => [
            'string',
            CreativeWork::class,
        ],
        'name' => [
            'string',
        ],
        'potentialAction' => [
            Action::class,
        ],
        'sameAs' => [
            'string',
        ],
        'subjectOf' => [
            CreativeWork::class,
            Event::class,
        ],
        'url' => [
            'string',
        ],
    ];

    public function __construct(array $data = [], bool $writeAll = false)
    {
        $missing = array_diff(static::DaftObjectProperties(), array_keys($data));

        /**
        * @var array<int, string>
        */
        $missing = array_combine(
            $missing,
            array_fill(0, count($missing), [])
        );

        /**
        * @var array<string, scalar|array|object|null>
        */
        $data = array_merge(
            $data,
            $missing
        );

        unset($data['@context'], $data['@type']);

        parent::__construct($data, $writeAll);
    }

    public function ObtainContext() : string
    {
        return (string) static::SCHEMA_ORG_CONTEXT;
    }

    public function ObtainType() : string
    {
        return (string) static::SCHEMA_ORG_TYPE;
    }

    /**
    * @return array<int, string>
    */
    public function GetAdditionalType() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'additionalType',
            $this->RetrievePropertyValueFromData('additionalType'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAdditionalType(array $value) : void
    {
        $this->NudgePropertyValue(
            'additionalType',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetAlternateName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'alternateName',
            $this->RetrievePropertyValueFromData('alternateName'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAlternateName(array $value) : void
    {
        $this->NudgePropertyValue(
            'alternateName',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetDescription() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'description',
            $this->RetrievePropertyValueFromData('description'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDescription(array $value) : void
    {
        $this->NudgePropertyValue(
            'description',
            $value,
            true
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetDisambiguatingDescription() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'disambiguatingDescription',
            $this->RetrievePropertyValueFromData('disambiguatingDescription'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDisambiguatingDescription(array $value) : void
    {
        $this->NudgePropertyValue(
            'disambiguatingDescription',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|PropertyValue>
    */
    public function GetIdentifier() : array
    {
        /**
        * @var array<int, string|PropertyValue>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'identifier',
            $this->RetrievePropertyValueFromData('identifier'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|PropertyValue> $value
    */
    public function SetIdentifier(array $value) : void
    {
        $this->NudgePropertyValue(
            'identifier',
            $value,
            true
        );
    }

    /**
    * @return array<int, string|ImageObject>
    */
    public function GetImage() : array
    {
        /**
        * @var array<int, string|ImageObject>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'image',
            $this->RetrievePropertyValueFromData('image'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|ImageObject> $value
    */
    public function SetImage(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'image',
            __METHOD__,
            $value,
            ImageObject::class
        );
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetMainEntityOfPage() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'mainEntityOfPage',
            $this->RetrievePropertyValueFromData('mainEntityOfPage'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetMainEntityOfPage(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsOrThings(
            'mainEntityOfPage',
            __METHOD__,
            $value,
            CreativeWork::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'name',
            $this->RetrievePropertyValueFromData('name'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetName(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString('name', __METHOD__, $value);
    }

    /**
    * @return array<int, Action>
    */
    public function GetPotentialAction() : array
    {
        /**
        * @var array<int, Action>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'potentialAction',
            $this->RetrievePropertyValueFromData('potentialAction'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, Action> $value
    */
    public function SetPotentialAction(array $value) : void
    {
        $this->NudgePropertyWithUniqueValuesOfThings(
            'potentialAction',
            __METHOD__,
            $value,
            Action::class
        );
    }

    /**
    * @return array<int, string>
    */
    public function GetSameAs() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'sameAs',
            $this->RetrievePropertyValueFromData('sameAs'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSameAs(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString('sameAs', __METHOD__, $value);
    }

    /**
    * @return array<int, CreativeWork|Event>
    */
    public function GetSubjectOf() : array
    {
        /**
        * @var array<int, CreativeWork|Event>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'subjectOf',
            $this->RetrievePropertyValueFromData('subjectOf'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, CreativeWork|Event> $value
    */
    public function SetSubjectOf(array $value) : void
    {
        $this->NudgePropertyValue('subjectOf', $value, true);
    }

    /**
    * @return array<int, string>
    */
    public function GetUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = TypeUtilities::ExpectRetrievedValueIsArray(
            'url',
            $this->RetrievePropertyValueFromData('url'),
            static::class
        );

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetUrl(array $value) : void
    {
        $this->NudgePropertyWithUniqueTrimmedStringsMightNotBeString('url', __METHOD__, $value);
    }

    public function jsonSerialize() : array
    {
        return array_filter(
            parent::jsonSerialize(),
            /**
            * @param scalar|array|object|null $val
            */
            function ($val) : bool {
                return ! is_array($val) || count($val) > 0;
            }
        );
    }

    public static function DaftObjectProperties() : array
    {
        /**
        * @var array<int, string>
        */
        $static = static::PROPERTIES;

        /**
        * @var string
        *
        * @psalm-var class-string<Thing>
        */
        $static_parent = get_parent_class(static::class);

        $parent = $static_parent::DaftObjectProperties();

        return array_unique(array_merge(
            $parent,
            $static
        ));
    }

    /**
    * @return array<string, array<int, string>>
    */
    public static function DaftObjectPropertiesWithMultiTypedArraysOfUniqueValues() : array
    {
        /**
        * @var array<string, array<int, string>>
        */
        $static = static::PROPERTIES_WITH_MULTI_TYPED_ARRAYS;

        /**
        * @var string
        *
        * @psalm-var class-string<Thing>
        */
        $static_parent = get_parent_class(static::class);

        if ($static_parent === get_parent_class(self::class)) {
            return $static;
        }

        $parent = $static_parent::DaftObjectPropertiesWithMultiTypedArraysOfUniqueValues();

        return array_merge(
            $parent,
            $static
        );
    }

    public static function DaftObjectNullableProperties() : array
    {
        /**
        * @var array<int, string>
        */
        $static = static::NULLABLE_PROPERTIES;

        /**
        * @var string
        *
        * @psalm-var class-string<Thing>
        */
        $static_parent = get_parent_class(static::class);

        $parent = $static_parent::DaftObjectNullableProperties();

        return array_unique(array_merge(
            $parent,
            $static
        ));
    }

    public static function DaftObjectExportableProperties() : array
    {
        return static::DaftObjectProperties();
    }

    public static function DaftObjectJsonProperties() : array
    {
        return static::DaftObjectProperties();
    }

    public static function DaftObjectPublicGetters() : array
    {
        /**
        * @var string
        *
        * @psalm-var class-string<Thing>
        */
        $static_parent = get_parent_class(static::class);

        $static = TypeUtilities::DaftObjectPublicGetters(static::class);

        if ($static_parent === get_parent_class(self::class)) {
            return $static;
        }

        return array_unique(array_merge(
            TypeUtilities::DaftObjectPublicGetters($static_parent),
            $static
        ));
    }

    public static function DaftObjectPublicOrProtectedGetters() : array
    {
        /**
        * @var string
        *
        * @psalm-var class-string<Thing>
        */
        $static_parent = get_parent_class(static::class);

        $static = TypeUtilities::DaftObjectPublicOrProtectedGetters(static::class);

        if ($static_parent === get_parent_class(self::class)) {
            return $static;
        }

        return array_unique(array_merge(
            TypeUtilities::DaftObjectPublicOrProtectedGetters($static_parent),
            $static
        ));
    }

    public static function DaftObjectPublicSetters() : array
    {
        /**
        * @var string
        *
        * @psalm-var class-string<Thing>
        */
        $static_parent = get_parent_class(static::class);

        $static = TypeUtilities::DaftObjectPublicSetters(static::class);

        if ($static_parent === get_parent_class(self::class)) {
            return $static;
        }

        return array_unique(array_merge(
            TypeUtilities::DaftObjectPublicSetters($static_parent),
            $static
        ));
    }

    /**
    * @return static
    *
    * @psalm-return Thing
    */
    public static function DaftObjectFromJsonString(
        string $string,
        bool $writeAll = self::BOOL_DEFAULT_WRITEALL
    ) : DaftJson {
        /**
        * @var array<string, scalar|(scalar|array|object|null)[]|object|null>
        */
        $decoded = json_decode($string, true);

        /**
        * @var static
        */
        $out = static::DaftObjectFromJsonArray($decoded, $writeAll);

        return $out;
    }

    /**
    * @return static
    *
    * @psalm-return Thing
    */
    public static function DaftObjectFromJsonArray(
        array $array,
        bool $writeAll = self::BOOL_DEFAULT_WRITEALL
    ) : DaftJson {
        $type = JsonTypeUtilities::ThrowIfNotDaftJson(static::class);

        $multi_type = static::DaftObjectPropertiesWithMultiTypedArraysOfUniqueValues();

        $data = [];

        $array_keys = array_keys($array);

        $data = array_combine($array_keys, array_map(
            /**
            * @param int|string $k
            *
            * @return mixed
            */
            function ($k) use ($array, $multi_type) {
                if ( ! is_string($k)) {
                    throw new InvalidArgumentException(
                        'Argument 1 passed to ' .
                        __METHOD__ .
                        '() must have all-string indices!'
                    );
                }

                if (is_array($array[$k])) {
                    return array_map(
                        /**
                        * @param mixed $val
                        *
                        * @return mixed
                        */
                        function ($val) use ($k, $multi_type) {
                            if (
                                is_array($val) &&
                                isset($val['@context'], $val['@type'], $multi_type[$k])
                            ) {
                                foreach ($multi_type[$k] as $maybe) {
                                    if (
                                        is_a($maybe, Thing::class, true) &&
                                        $val['@context'] === $maybe::SCHEMA_ORG_CONTEXT &&
                                        $val['@type'] === $maybe::SCHEMA_ORG_TYPE
                                    ) {
                                        return $maybe::DaftObjectFromJsonArray($val);
                                    }
                                }
                            }

                            return $val;
                        },
                        $array[$k]
                    );
                }

                return $array[$k];
            },
            $array_keys
        ));

        /**
        * @psalm-var Thing
        *
        * @var Thing
        */
        $out = new $type($data, $writeAll);

        return $out;
    }

    /**
    * @param array<int, bool|Thing|DataTypes\DataType> $value
    *
    * @psalm-param class-string<Thing>|class-string<DataTypes\DataType> ...$implementation
    */
    protected function NudgePropertyWithUniqueBooleansOrThings(
        string $property,
        string $method,
        array $value,
        string ...$implementation
    ) : void {
        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, string|Thing|DataTypes\DataType> $value
    *
    * @psalm-param class-string<Thing>|class-string<DataTypes\DataType> ...$implementation
    */
    protected function NudgePropertyWithUniqueTrimmedStringsOrThings(
        string $property,
        string $method,
        array $value,
        string ...$implementation
    ) : void {
        $initialCount = count($value);

        /**
        * @var array<int, string|Thing|DataTypes\DataType>
        */
        $value = array_values(array_filter(
            array_map(
                /**
                * @param string|Thing|DataTypes\DataType $val
                *
                * @return string|Thing|DataTypes\DataType
                */
                function ($val) {
                    return is_string($val) ? trim($val) : $val;
                },
                $value
            ),
            /**
            * @param string|Thing|DataTypes\DataType $maybe
            */
            function ($maybe) : bool {
                return '' !== $maybe;
            }
        ));

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Arguments passed to ' .
                __METHOD__ .
                ' must be strings with no trailing whitespace or instances of ' .
                Thing::class
            );
        }

        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, int|float|string|Thing|DataTypes\DataType> $value
    *
    * @psalm-param class-string<Thing>|class-string<DataTypes\DataType> ...$implementation
    */
    protected function NudgePropertyWithUniqueNumericsOrThings(
        string $property,
        string $method,
        array $value,
        string ...$implementation
    ) : void {
        $initialCount = count($value);

        /**
        * @var array<int, string|Thing|DataTypes\DataType>
        */
        $value = array_values(
            array_map(
                /**
                * @param string|int|float|Thing|DataTypes\DataType $val
                *
                * @return int|float|Thing|DataTypes\DataType
                */
                function ($val) {
                    return
                        is_string($val)
                            ? (
                                ctype_digit($val)
                                    ? (int) $val
                                    : (float) $val
                            )
                            : $val;
                },
                $value
            )
        );

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Arguments passed to ' .
                __METHOD__ .
                ' must be numerics or instances of ' .
                Thing::class
            );
        }

        $this->NudgePropertyWithUniqueValues($property, $method, $value, SORT_NUMERIC);
    }

    /**
    * @param array<int, string> $value
    */
    protected function NudgePropertyWithUniqueTrimmedStringsMightNotBeString(
        string $property,
        string $method,
        array $value
    ) : void {
        $initialCount = count($value);

        $value = array_filter(array_map('trim', $value), function (string $maybe) : bool {
            return '' !== $maybe;
        });

        if ($initialCount !== count($value)) {
            throw new InvalidArgumentException(
                'Arguments passed to ' .
                $method .
                ' must not have trailing whitespace!'
            );
        }

        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, int|float|string> $value
    */
    protected function NudgePropertyWithUniqueTrimmedStringsNumericsMightNotBeStringsOrNumerics(
        string $property,
        string $method,
        array $value
    ) : void {
        $initialCount = count($value);

        /**
        * @var array<int, string|float|int>
        */
        $value = array_filter(
            $value,
            /**
            * @param mixed $maybe
            */
            function ($maybe) : bool {
                return is_string($maybe) || is_numeric($maybe);
            }
        );

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Argument 1 passed to ' .
                $method .
                ' must be an array of numerics!'
            );
        }

        /**
        * @var array<int, string|int|float>
        */
        $value = array_unique(
            array_map(
                /**
                * @param string|float|int $val
                *
                * @return string|float|int
                */
                function ($val) {
                    return
                        is_string($val)
                            ? (
                                ctype_digit($val)
                                    ? (int) $val
                                    : (
                                        is_numeric($val)
                                            ? (float) $val
                                            : trim($val)
                                    )
                            )
                            : $val;
                },
                $value
            ),
            SORT_NUMERIC
        );

        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, int> $value
    */
    protected function NudgePropertyWithUniqueIntegers(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, int|float|string> $value
    */
    protected function NudgePropertyWithUniqueIntegersOrFloats(
        string $property,
        string $method,
        array $value
    ) : void {
        $initialCount = count($value);

        /**
        * @var array<int, int|float>
        */
        $value = array_map(
            /**
            * @param int|float|string $val
            *
            * @return int|float
            */
            function ($val) {
                return
                    (is_int($val) || is_float($val))
                        ? $val
                        : (
                            ctype_digit($val)
                                ? (int) $val
                                : (float) $val
                        );
            },
            array_filter($value, 'is_numeric')
        );

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Argument 1 passed to ' .
                $method .
                ' must be a numeric list!'
            );
        }

        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, bool> $value
    */
    protected function NudgePropertyWithUniqueBooleans(
        string $property,
        array $value
    ) : void {
        $replace = [];
        if (in_array(true, $value, true)) {
            $replace[] = true;
        }
        if (in_array(false, $value, true)) {
            $replace[] = false;
        }

        $this->NudgePropertyValue($property, $replace);
    }

    /**
    * @param array<int, int|string> $value
    */
    protected function NudgePropertWithUniqueIntegersOrTrimmedStrings(
        string $property,
        string $method,
        array $value
    ) : void {
        $initialCount = count($value);

        $value = array_map(
            /**
            * @param int|string $val
            *
            * @return int|string
            */
            function ($val) {
                return is_string($val) ? trim($val) : $val;
            },
            array_filter(
                $value,
                /**
                * @param mixed $maybe
                */
                function ($maybe) : bool {
                    return is_string($maybe) || is_int($maybe);
                }
            )
        );

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Argument 1 passed to ' .
                $method .
                ' must be a list of integers & strings!'
            );
        }

        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }

    /**
    * @param array<int, scalar|array|object|null> $value
    */
    protected function NudgePropertyWithUniqueValues(
        string $property,
        string $method,
        array $value,
        int $sort_flags = SORT_REGULAR
    ) : void {
        $initialCount = count($value);

        $out = [];

        foreach ($value as $val) {
            if ( ! in_array($val, $out, true)) {
                $out[] = $val;
            } else {
                throw new InvalidArgumentException(
                    'Arguments passed to ' .
                    $method .
                    ' must be unique, ' .
                    var_export($val, true) .
                    ' already found!'
                );
            }
        }

        $value = $out;

        if ($initialCount !== count($value)) {
            throw new InvalidArgumentException(
                'Arguments passed to ' .
                $method .
                ' must be unique!'
            );
        }

        $this->NudgePropertyValue($property, $value);
    }

    /**
    * @param array<int, Date> $value
    */
    protected function NudgePropertyWithUniqueDates(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings($property, $method, $value, Date::class);
    }

    /**
    * @param array<int, DateTime> $value
    */
    protected function NudgePropertyWithUniqueDateTimes(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings($property, $method, $value, DateTime::class);
    }

    /**
    * @param array<int, Date|DateTime> $value
    */
    protected function NudgePropertyWithUniqueDatesOrDateTimes(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            $method,
            $value,
            Date::class,
            DateTime::class
        );
    }

    /**
    * @param array<int, Person> $value
    */
    protected function NudgePropertyWithUniquePersons(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            $method,
            $value,
            Person::class
        );
    }

    /**
    * @param array<int, Organization|Person> $value
    */
    protected function NudgePropertyWithUniqueOrganizationsOrPersons(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            $method,
            $value,
            Organization::class,
            Person::class
        );
    }

    /**
    * @param array<int, Organization> $value
    */
    protected function NudgePropertyWithUniqueOrganizations(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            $method,
            $value,
            Organization::class
        );
    }

    /**
    * @param array<int, Event> $value
    */
    protected function NudgePropertyWithUniqueEvents(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            $method,
            $value,
            Event::class
        );
    }

    /**
    * @param array<int, Place> $value
    */
    protected function NudgePropertyValueWithUniquePlaces(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            __METHOD__,
            $value,
            Place::class
        );
    }

    /**
    * @param array<int, ContactPoint|Place> $value
    */
    protected function NudgePropertyValueWithUniqueContactPointsOrPlaces(
        string $property,
        string $method,
        array $value
    ) : void {
        $this->NudgePropertyWithUniqueValuesOfThings(
            $property,
            __METHOD__,
            $value,
            ContactPoint::class,
            Place::class
        );
    }

    /**
    * @param array<int, Thing|DataTypes\DataType> $value
    *
    * @psalm-param class-string<Thing>|class-string<DataTypes\DataType> $validThing
    * @psalm-param class-string<Thing>|class-string<DataTypes\DataType> ...$validThings
    */
    protected function NudgePropertyWithUniqueValuesOfThings(
        string $property,
        string $method,
        array $value,
        string $validThing,
        string ...$validThings
    ) : void {
        array_unshift($validThings, $validThing);

        $initialCount = count($validThings);

        if (count($validThings) !== $initialCount) {
            throw new InvalidArgumentException(
                'Arguments 4+ passed to ' .
                __METHOD__ .
                ' must be implementations of ' .
                Thing::class .
                '!'
            );
        }

        $initialCount = count($value);

        /**
        * @var array<int, Thing|DataTypes\DataType>
        */
        $value = array_filter(
            $value,
            /**
            * @param Thing|DataTypes\DataType $maybe
            */
            function ($maybe) use ($validThings) : bool {
                foreach ($validThings as $thing) {
                    if (is_a($maybe, $thing, true)) {
                        return true;
                    }
                }

                return false;
            }
        );

        if (count($value) !== $initialCount) {
            throw new InvalidArgumentException(
                'Argument 1 passed to ' .
                $method .
                ' must be an array containing any combination of ' .
                implode(', ', $validThings)
            );
        }

        $this->NudgePropertyWithUniqueValues($property, $method, $value);
    }
}
