<?php

namespace Esayers\Html;

/**
 * Describes objects that should be rendered with encoding by default.
 *
 * This should be used for almost all render cases.
 */
abstract class AbstractEncodedRenderable extends AbstractRenderable
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
