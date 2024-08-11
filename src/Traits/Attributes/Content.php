<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Content
{
    public function content(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('content', $value);
        return $this;
    }
}
