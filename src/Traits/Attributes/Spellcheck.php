<?php

namespace Esayers\Html\Traits\Attributes;

trait Spellcheck
{
    public function spellcheck(string|bool|array $value)
    {
        $this->setAttribute('spellcheck', $value);
    }
}
