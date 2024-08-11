<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Hreflang
{
    public function hreflang(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('hreflang', $value);
        return $this;
    }
}
