<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Traits\Renderable;

abstract class AbstractTag
{
    use Renderable;

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

    /**
     * Appends an attribute or overrides if already set
     * @param string $key Name of the attribute
     * @param mixed $value Value for the attribute
     * @return $this
     */
    final public function attribute(string $key, mixed $value): AbstractTag
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
    final public function attributes(array $attributes): AbstractTag
    {
        $this->attributes = array_merge($this->attributes, $attributes);
        return $this;
    }

    /**
     * @return array
     */
    final public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return string
     */
    final public function getName(): string
    {
        return $this->name;
    }
}
