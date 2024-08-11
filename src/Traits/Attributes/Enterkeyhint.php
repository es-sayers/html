<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Enterkeyhint
{
    public function enterkeyhint(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('enterkeyhint', $value);
        return $this;
    }
}
