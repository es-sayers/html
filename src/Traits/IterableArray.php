<?php

namespace Esayers\Html\Traits;

/**
 * Iterator implementation for classes that have an iterable array
 */
trait IterableArray
{
    /**
     * @var int
     */
    protected int $iteratorPos = 0;

    /**
     * Get array that should be iterable
     * @return array
     */
    abstract protected function getIterableArray(): array;

    /**
     * @inheritDoc
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->getIterableArray()[$this->iteratorPos];
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function key(): int
    {
        return $this->iteratorPos;
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function next(): void
    {
        ++$this->iteratorPos;
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function rewind(): void
    {
        $this->iteratorPos = 0;
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function valid(): bool
    {
        return isset($this->getIterableArray()[$this->iteratorPos]);
    }
}
