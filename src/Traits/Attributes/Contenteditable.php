<?php

namespace Esayers\Html\Traits\Attributes;

trait Contenteditable
{
    public function contenteditable(string|bool|array $value)
    {
        $this->setAttribute('contenteditable', $value);
    }
}
