<?php

namespace Esayers\Html;

interface RenderableInterface
{
    public function render(): string;
    public function __toString(): string;
}
