<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Spellcheck
{
    public function spellcheck(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('spellcheck', $value);
        return $this;
    }
}
