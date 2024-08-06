<?php

namespace Esayers\Html\Tags;

use Esayers\Html\Attribute;
use Esayers\Html\Tags\AbstractTag;

/**
 * Implements HTML tags that cannot have children
 */
class VoidTag extends AbstractTag
{
    /**
     * Renders with trailing slash
     * @return string
     */
    public function render(): string
    {
        return '<' . $this->name . Attribute::renderAttributes($this->attributes) . '/>';
    }
}
