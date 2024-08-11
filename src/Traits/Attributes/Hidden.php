<?php

namespace Esayers\Html\Traits\Attributes;

trait Hidden
{
    public function hidden(string|bool|array $value)
    {
        $this->setAttribute('hidden', $value);
    }
}
