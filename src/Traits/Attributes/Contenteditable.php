<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Contenteditable
{
    public function contenteditable(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('contenteditable', $value);
        return $this;
    }
}
