<?php

namespace Esayers\Html\Traits;

/**
 * Describes objects that should be rendered with encoding by default.
 */
trait EncodedRenderable
{
    use Renderable;

    protected function preRender(string $renderString): string
    {
        return htmlspecialchars($this->renderString());
    }

    protected function illegalRenderChars(): array
    {
        return ['<', '>', '"', "'", '='];
    }
}
