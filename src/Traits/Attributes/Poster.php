<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Poster
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function poster(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('poster', $value);
        return $this;
    }
}
