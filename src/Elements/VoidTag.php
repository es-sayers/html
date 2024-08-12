<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Attribute;
use Esayers\Html\Elements\AbstractTag;

/**
 * Implements HTML tags that cannot have children
 */
class VoidTag extends AbstractTag
{
    /**
     * Renders with trailing slash
     * @return string
     */
    public function renderString(): string
    {
        return '<' . $this->name . $this->renderAttributes() . '/>';
    }
}
