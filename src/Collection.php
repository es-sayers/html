<?php

namespace Esayers\Html;

use Esayers\Html\Traits\IterableArray;

/**
 * Stores a collection of data in an indexed array. Provides array abstraction.
 */
class Collection implements \Iterator
{
    use IterableArray;

    /**
     * @var array Holds collection data
     */
    private array $array = [];

    /**
     * @param array $array Collection data, array keys will be lost
     */
    public function __construct(array $array = [])
    {
        $this->array = array_values($array);
    }

    /**
     * @inheritDoc
     * @return array
     */
    protected function getIterableArray(): array
    {
        return $this->array;
    }

    /**
     * @return array
     */
    public function toArray(): array
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
     * Called before insertAt()
     * @param mixed $element Element to be inserted
     * @return string
     */
    protected function beforeInsert(mixed $element): mixed
    {
        return $element;
    }

    /**
     * Insert element at index
     * @param mixed $element
     * @param int $index
     * @return $this
     */
    public function insertAt(mixed $element, int $index): Collection
    {
        $element = $this->beforeInsert($element);
        array_splice($this->array, $index, 0, [$element]);
        return $this;
    }

    /**
     * Inserts element at beginning of array
     * @param mixed $element
     * @return $this
     */
    public function prepend(mixed $element): Collection
    {
        $this->insertAt($element, 0);
        return $this;
    }

    /**
     * Inserts element at the end of array
     * @param mixed $element
     * @return $this
     */
    public function append(mixed $element): Collection
    {
        $this->insertAt($element, count($this->array));
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
        foreach ($elements as $element) {
            $this->insertAt($element, $index);
            $index++;
        }
        return $this;
    }

    /**
     * Inserts array of elements starting at beginning of array
     * @param array $element
     * @return $this
     */
    public function prependAll(array $elements): Collection
    {
        $this->insertAllAt($elements, 0);
        return $this;
    }

    /**
     * Inserts array of elements starting at the end of array
     * @param array $element
     * @return $this
     */
    public function appendAll(array $elements): Collection
    {
        $this->insertAllAt($elements, count($this->array));
        return $this;
    }

    /**
     * Called before replaceAt()
     * @param mixed $element Element to be inserted
     * @return string
     */
    public function beforeReplace(mixed $element): mixed
    {
        return $element;
    }

    /**
     * Replaces the element at index with replacement
     * @param mixed $replacement
     * @param int $index
     * @return $this
     */
    public function replaceAt(mixed $replacement, int $index): Collection
    {
        $replacement = $this->beforeReplace($replacement);
        $this->array[$index] = $replacement;
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
        $this->replaceAt($replacement, 0);
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
        $this->replaceAt($replacement, count($this->array) - 1);
        return $this;
    }
}
