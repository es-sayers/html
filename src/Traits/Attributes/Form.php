<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Form
{
    public function form(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('form', $value);
        return $this;
    }
}
