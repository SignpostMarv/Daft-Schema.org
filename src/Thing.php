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
        $this->NudgePropertyValue(
            'image',
            $value,
            true
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
        $this->NudgePropertyValue(
            'mainEntityOfPage',
            $value,
            true
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
        $this->NudgePropertyValue('name', $value, true);
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
        $this->NudgePropertyValue(
            'potentialAction',
            $value
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
        $this->NudgePropertyValue('sameAs', $value, true);
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
        $this->NudgePropertyValue('url', $value, true);
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
