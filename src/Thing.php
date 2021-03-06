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
use SignpostMarv\DaftObject\SchemaOrg\Intangible\StructuredValue\PropertyValue;
use SignpostMarv\DaftObject\SchemaOrgLookup\LookupInterface;

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
    const BOOL_DEFAULT_AUTOTRIMSTRINGS = true;

    const INT_FILL_FROM_START = 0;

    const INT_COUNT_NOT_EMPTY = 0;

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
            array_fill(self::INT_FILL_FROM_START, count($missing), [])
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
        $out = $this->ExpectRetrievedValueIsArray('additionalType');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAdditionalType(array $value) : void
    {
        $this->NudgePropertyValue('additionalType', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string>
    */
    public function GetAlternateName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('alternateName');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetAlternateName(array $value) : void
    {
        $this->NudgePropertyValue('alternateName', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string>
    */
    public function GetDescription() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('description');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDescription(array $value) : void
    {
        $this->NudgePropertyValue('description', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string>
    */
    public function GetDisambiguatingDescription() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('disambiguatingDescription');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetDisambiguatingDescription(array $value) : void
    {
        $this->NudgePropertyValue('disambiguatingDescription', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string|PropertyValue>
    */
    public function GetIdentifier() : array
    {
        /**
        * @var array<int, string|PropertyValue>
        */
        $out = $this->ExpectRetrievedValueIsArray('identifier');

        return $out;
    }

    /**
    * @param array<int, string|PropertyValue> $value
    */
    public function SetIdentifier(array $value) : void
    {
        $this->NudgePropertyValue('identifier', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string|ImageObject>
    */
    public function GetImage() : array
    {
        /**
        * @var array<int, string|ImageObject>
        */
        $out = $this->ExpectRetrievedValueIsArray('image');

        return $out;
    }

    /**
    * @param array<int, string|ImageObject> $value
    */
    public function SetImage(array $value) : void
    {
        $this->NudgePropertyValue('image', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string|CreativeWork>
    */
    public function GetMainEntityOfPage() : array
    {
        /**
        * @var array<int, string|CreativeWork>
        */
        $out = $this->ExpectRetrievedValueIsArray('mainEntityOfPage');

        return $out;
    }

    /**
    * @param array<int, string|CreativeWork> $value
    */
    public function SetMainEntityOfPage(array $value) : void
    {
        $this->NudgePropertyValue('mainEntityOfPage', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string>
    */
    public function GetName() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('name');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetName(array $value) : void
    {
        $this->NudgePropertyValue('name', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, Action>
    */
    public function GetPotentialAction() : array
    {
        /**
        * @var array<int, Action>
        */
        $out = $this->ExpectRetrievedValueIsArray('potentialAction');

        return $out;
    }

    /**
    * @param array<int, Action> $value
    */
    public function SetPotentialAction(array $value) : void
    {
        $this->NudgePropertyValue('potentialAction', $value);
    }

    /**
    * @return array<int, string>
    */
    public function GetSameAs() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('sameAs');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetSameAs(array $value) : void
    {
        $this->NudgePropertyValue('sameAs', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, CreativeWork|Event>
    */
    public function GetSubjectOf() : array
    {
        /**
        * @var array<int, CreativeWork|Event>
        */
        $out = $this->ExpectRetrievedValueIsArray('subjectOf');

        return $out;
    }

    /**
    * @param array<int, CreativeWork|Event> $value
    */
    public function SetSubjectOf(array $value) : void
    {
        $this->NudgePropertyValue('subjectOf', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    /**
    * @return array<int, string>
    */
    public function GetUrl() : array
    {
        /**
        * @var array<int, string>
        */
        $out = $this->ExpectRetrievedValueIsArray('url');

        return $out;
    }

    /**
    * @param array<int, string> $value
    */
    public function SetUrl(array $value) : void
    {
        $this->NudgePropertyValue('url', $value, self::BOOL_DEFAULT_AUTOTRIMSTRINGS);
    }

    public function jsonSerialize() : array
    {
        return array_filter(
            parent::jsonSerialize(),
            /**
            * @param scalar|array|object|null $val
            */
            function ($val) : bool {
                return ! is_array($val) || count($val) > self::INT_COUNT_NOT_EMPTY;
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

        $array_keys = array_keys($array);

        foreach ($array_keys as $k) {
            if ( ! is_string($k)) {
                throw new InvalidArgumentException(
                    'Argument 1 passed to ' .
                    __METHOD__ .
                    '() must have all-string indices!'
                );
            }
        }

        /**
        * @var array<int, string>
        */
        $array_keys = $array_keys;

        $data = array_combine($array_keys, array_map(
            /**
            * @param string $k
            *
            * @return mixed
            */
            function (string $k) use ($array, $multi_type) {
                if (is_array($array[$k])) {
                    return static::DaftObjectFromJsonArrayFromArray($k, $multi_type, $array[$k]);
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
    * @param array<string, array<int, string>> $multi_type
    */
    protected static function DaftObjectFromJsonArrayFromArray(
        string $k,
        array $multi_type,
        array $arr
    ) : array {
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
                    /**
                    * @psalm-var array<string, array<array-key, array<array-key, mixed>|scalar|object|null>|scalar|object|null>
                    */
                    $val = $val;

                    return static::DaftObjectFromJsonArrayFromArrayMapVal($val, $multi_type, $k);
                }

                return $val;
            },
            $arr
        );
    }

    /**
    * @param array<string, array<int, string>> $multi_type
    *
    * @psalm-param array<string, array<array-key, array<array-key, mixed>|scalar|object|null>|scalar|object|null> $val
    */
    protected static function DaftObjectFromJsonArrayFromArrayMapVal(
        array $val,
        array $multi_type,
        string $k
    ) : Thing {
        foreach ($multi_type[$k] as $maybe) {
            $lookup_class =
                'SignpostMarv\\DaftObject\\SchemaOrgLookup\\Lookup_' .
                hash('sha512', $maybe);
            if (is_a($lookup_class, LookupInterface::class, true)) {
                /**
                * @psalm-var array<int, class-string<Thing>>
                */
                $maybe_classes = $lookup_class::ObtainClasses();

                foreach ($maybe_classes as $maybe_class) {
                    if (
                        $val['@context'] === $maybe_class::SCHEMA_ORG_CONTEXT &&
                        $val['@type'] === $maybe_class::SCHEMA_ORG_TYPE
                    ) {
                        return $maybe_class::DaftObjectFromJsonArray($val);
                    }
                }
            }
        }

        throw new InvalidArgumentException(
            'Argument 3 (' .
            $k .
            ') passed to ' .
            __METHOD__ .
            '() did not correspond to an instance of ' .
            Thing::class .
            ' as defined in argument 2!'
        );
    }

    protected function ExpectRetrievedValueIsArray(string $property) : array
    {
        return TypeUtilities::ExpectRetrievedValueIsArray(
            $property,
            $this->RetrievePropertyValueFromData($property),
            static::class
        );
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
}
