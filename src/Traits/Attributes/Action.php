<?php

namespace Esayers\Html\Traits\Attributes;

trait Action
{
    public function action(string|bool|array $value)
    {
        $this->setAttribute('action', $value);
    }
}
