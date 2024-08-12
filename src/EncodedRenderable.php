<?php

namespace Esayers\Html;

/**
 * Describes objects that should be rendered with encoding by default.
 */
abstract class EncodedRenderable extends Renderable
{
    protected function preRender(string $renderString): string
    {
        return htmlspecialchars($this->renderString());
    }

    protected function illegalRenderChars(): array
    {
        return ['<', '>', '"', "'", '='];
    }
}
