<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Hidden
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function hidden(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('hidden', $value);
        return $this;
    }
}
