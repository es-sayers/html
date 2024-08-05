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


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->render();
    }

    abstract public function render(): string;

    public function getName(): string
    {
        return $this->name;
    }
}
