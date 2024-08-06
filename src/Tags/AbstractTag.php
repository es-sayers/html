<?php

namespace Esayers\Html\Tags;

use Esayers\Html\RenderableInterface;

/**
 * Abstract class for HTML Tags
 */
abstract class AbstractTag implements RenderableInterface
{
    /**
     * HTML Tag Name
     * @var string
     */
    protected string $name = '';

    /**
     * HTML Attributes
     * @var array
     */
    protected array $attributes = [];


    public function __construct(string $name, array $attributes = [])
    {
        $this->name = $name;
        $this->attributes  = $attributes;
    }

    public function __toString(): string
    {
        return $this->render();
    }

    abstract public function render(): string;

    /**
     * Appends an attribute or overrides if already set
     * @param string $key Name of the attribute
     * @param mixed $value Value for the attribute
     * @return $this
     */
    public function attribute(string $key, mixed $value): AbstractTag
    {
        $this->attributes = array_merge($this->attributes, [$key => $value]);
        return $this;
    }

    /**
     * Appends an attribute or overrides if already set
     * @param string $key Name of the attribute
     * @param mixed $value Value for the attribute
     * @return $this
     */
    public function attributes(array $attributes): AbstractTag
    {
        $this->attributes = array_merge($this->attributes, $attributes);
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
