<?php

namespace Esayers\Html\Traits\Attributes;

trait Draggable
{
    public function draggable(string|bool|array $value)
    {
        $this->setAttribute('draggable', $value);
    }
}
