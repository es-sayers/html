<?php

namespace Esayers\Html;

/**
 * Stores a collection of data in an indexed array. Provides array abstraction.
 */
class Collection
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = array_values($array);
    }

    /**
     * @return array
     */
    public function getCollection(): array
    {
        return $this->array;
    }

    /**
     * @return $this
     */
    public function setCollection(array $array): Collection
    {
        $this->array = array_values($array);
        return $this;
    }

    /**
     * @return mixed
     */
    public function at($index): mixed
    {
        return $this->array[$index];
    }

    /**
     * Removes array element at index
     * @param int $index
     * @return $this
     */
    public function removeAt(int $index): Collection
    {
        array_splice($this->array, $index, 1);
        return $this;
    }

    /**
     * Removes all array elements
     * @return $this
     */
    public function removeAll(): Collection
    {
        $this->array = [];
        return $this;
    }

    /**
     * Removes first array element
     * @return $this
     */
    public function removeFirst(): Collection
    {
        array_splice($this->array, 0, 1);
        return $this;
    }

    /**
     * Removes last array element
     * @return $this
     */
    public function removeLast(): Collection
    {
        array_splice($this->array, -1, 1);
        return $this;
    }

    /**
     * Insert element at index
     * @param mixed $element
     * @param int $index
     * @return $this
     */
    public function insertAt(mixed $element, int $index): Collection
    {
        array_splice($this->array, $index, 0, [$element]);
        return $this;
    }

    /**
     * Inserts element at beginning of array
     * @param mixed $element
     * @return $this
     */
    public function insertFirst(mixed $element): Collection
    {
        $this->insertAt($element, 0);
        return $this;
    }

    /**
     * Alias for { @see Arr::insertFirst() }
     * @param mixed $element
     * @return $this
     */
    public function prepend(mixed $element): Collection
    {
        $this->insertFirst($element);
        return $this;
    }

    /**
     * Inserts element at the end of array
     * @param mixed $element
     * @return $this
     */
    public function insertLast(mixed $element): Collection
    {
        array_push($this->array, $element);
        return $this;
    }

    /**
     * Alias for { @see Arr::insertLast() }
     * @param mixed $element
     * @return $this
     */
    public function append(mixed $element): Collection
    {
        $this->insertLast($element);
        return $this;
    }

    /**
     * Insert array of elements starting at index
     * @param array $element
     * @param int $index
     * @return $this
     */
    public function insertAllAt(array $elements, int $index): Collection
    {
        array_splice($this->array, $index, 0, $elements);
        return $this;
    }

    /**
     * Inserts array of elements starting at beginning of array
     * @param array $element
     * @return $this
     */
    public function insertAllFirst(array $elements): Collection
    {
        $this->insertAllAt($elements, 0);
        return $this;
    }

    /**
     * Alias for { @see Arr::insertAllFirst() }
     * @param mixed $element
     * @return $this
     */
    public function prependAll(array $elements): Collection
    {
        $this->insertAllFirst($elements);
        return $this;
    }

    /**
     * Inserts array of elements starting at the end of array
     * @param array $element
     * @return $this
     */
    public function insertAllLast(array $elements): Collection
    {
        foreach ($elements as $element) {
            array_push($this->array, $element);
        }
        return $this;
    }

    /**
     * Alias for { @see Arr::insertAllLast() }
     * @param array $element
     * @return $this
     */
    public function appendAll(array $elements): Collection
    {
        $this->insertAllLast($elements);
        return $this;
    }

    /**
     * Replaces the element at index with replacement
     * @param mixed $replacement
     * @param int $index
     * @return $this
     */
    public function replaceAt(mixed $replacement, int $index): Collection
    {
        array_splice($this->array, $index, 1, [$replacement]);
        return $this;
    }

    /**
     * Replaces the first element with replacement
     * @param mixed $replacement
     * @param int $index
     * @return $this
     */
    public function replaceFirst(mixed $replacement): Collection
    {
        array_splice($this->array, 0, 1, [$replacement]);
        return $this;
    }

    /**
     * Replaces the last element with replacement
     * @param mixed $replacement
     * @param int $index
     * @return $this
     */
    public function replaceLast(mixed $replacement): Collection
    {
        array_splice($this->array, count($this->array) - 1, 1);
        array_push($this->array, $replacement);
        return $this;
    }
}
