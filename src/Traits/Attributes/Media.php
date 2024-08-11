<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Media
{
    public function media(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('media', $value);
        return $this;
    }
}
