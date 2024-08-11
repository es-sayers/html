<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Loading
{
    public function loading(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('loading', $value);
        return $this;
    }
}
