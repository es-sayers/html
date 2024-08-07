<?php

namespace Esayers\Html;

/**
 * RenderableInterface ensures that the object can be rendered as a string
 */
interface RenderableInterface
{
    /**
     * Create string for object rendering
     *
     * @return string
     */
    public function render(): string;

    /**
     * @return string
     */
    public function __toString(): string;
}
