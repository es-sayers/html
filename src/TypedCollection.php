<?php

namespace Esayers\Html;

use InvalidArgumentException;

/**
 * Enforces collection to be a specified type
 */
class TypedCollection extends Collection
{
    /**
     * @var string
     */
    private string $type;

    /**
     * @inheritDoc
     * @param string $type Data type
     */
    public function __construct(string $type, array $array = [])
    {
        $this->type = $type;

        parent::__construct($array);
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * Checks if provided element is of $this->type
     * @param mixed $element
     * @throws InvalidArgumentException
     * @return void
     */
    private function checkType(mixed $element)
    {
        if (gettype($element) !== $this->type) {
            throw new InvalidArgumentException(
                gettype($element) . ' ' . $element . ' does not match TypedCollection type: ' . $this->type
            );
        }
    }

    /**
     * @inheritDoc
     */
    public function beforeInsert(mixed $element): mixed
    {
        $this->checkType($element);
        return $element;
    }

    /**
     * @inheritDoc
     */
    public function beforeReplace(mixed $element): mixed
    {
        $this->checkType($element);
        return $element;
    }
}
