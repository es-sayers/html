<?php

namespace Esayers\Html;

/**
 * Static class provides methods for manipulating tag attributes
 */
class Attribute
{
    /**
     * HTML attributes that can have a list of values with specified separator
     * [ 'attributeName' => 'separator' ]
     */
    public const LIST_ATTRIBUTES = [
        'class' => ' ',
        'accept' => ',',
        'accept-charset' => ' ',
        'ping' => ' ',
    ];

    /**
     * Creates attribute string
     *
     * @param array $attributes
     * @return string
     */
    public static function renderAttributes(array $attributes): string
    {
        $str = '';
        if (count($attributes) > 0) {
            foreach ($attributes as $key => $value) {
                if (array_key_exists($key, self::LIST_ATTRIBUTES) && is_array($value)) {
                    $str .= self::renderListAttribute($key, $value);
                } else {
                    $str .= " $key=\"$value\"";
                }
            }
        }
        return $str;
    }

    /**
     * Renders attributes that can have a list of values {@see self::LIST_ATTRIBUTES}
     * @param string $key Attribute name
     * @param array $values Values to concatenate
     * @return string
     */
    private static function renderListAttribute(string $key, array $value): string
    {
        $separator = self::LIST_ATTRIBUTES[$key];
        return " $key=\"" . implode($separator, $value) . "\"";
    }
}
