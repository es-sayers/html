<?php

namespace Esayers\Html\Helpers;

/**
 * Array helper
 */
abstract class Arr
{
    /**
     * Removes array element at index
     * @param array &array
     * @param int $index
     * @return void
     */
    public static function removeIndex(array &$array, int $index)  :void
    {
        array_splice($array, $index, 1);
    }

    /**
     * Removes first array element
     * @param array &array
     * @return void
     */
    public static function removeFirst(array &$array):void
    {
        array_splice($array, 0, 1);
    }

    /**
     * Removes last array element
     * @param array &array
     * @return void
     */
    public static function removeLast(array &$array):void
    {
        array_splice($array, -1, 1);
    }


    /**
     * Insert element at index
     * @param array &array
     * @param mixed $element
     * @param int $index
     * @return void
     */
    public static function insertAt(array &$array, mixed $element, int $index):void
    {
        array_splice($array, $index, 0, [$element]);
    }

    /**
     * Inserts element at beginning of array
     * @param array &array
     * @param mixed $element
     * @return void
     */
    public static function prepend(array &$array, mixed $element)
    {
        self::insertAt($array, $element, 0);
    }

    /**
     * Inserts element at the end of array
     * @param array &array
     * @param mixed $element
     * @return void
     */
    public static function append(array &$array, mixed $element)
    {
        self::insertAt($array, $element, count($array));
    }

    /**
     * Insert array of elements starting at index
     * @param array &array
     * @param array $element
     * @param int $index
     * @return void
     */
    public static function insertAllAt(array &$array, array $elements, int $index)
    {
        foreach ($elements as $element) {
            self::insertAt($array, $element, $index);
            $index++;
        }
    }

    /**
     * Inserts array of elements starting at beginning of array
     * @param array &array
     * @param array $element
     * @return void
     */
    public static function prependAll(array &$array, array $elements)
    {
        self::insertAllAt($array, $elements, 0);
    }

    /**
     * Inserts array of elements starting at the end of array
     * @param array &array
     * @param array $element
     * @return void
     */
    public static function appendAll(array &$array, array $elements)
    {
        self::insertAllAt($array, $elements, count($array));
    }


    /**
     * Replaces the element at index with replacement
     * @param array &array
     * @param mixed $replacement
     * @param int $index
     * @return void
     */
    public static function replaceAt(array &$array, mixed $replacement, int $index)
    {
        $array[$index] = $replacement;
    }

    /**
     * Replaces the first element with replacement
     * @param array &array
     * @param mixed $replacement
     * @param int $index
     * @return void
     */
    public static function replaceFirst(array &$array, mixed $replacement)
    {
        self::replaceAt($array, $replacement, 0);
    }

    /**
     * Replaces the last element with replacement
     * @param array &array
     * @param mixed $replacement
     * @param int $index
     * @return void
     */
    public static function replaceLast(array &$array, mixed $replacement)
    {
        self::replaceAt($array, $replacement, count($array) - 1);
    }
}
