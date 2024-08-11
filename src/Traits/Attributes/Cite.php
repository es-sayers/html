<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Cite
{
    public function cite(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('cite', $value);
        return $this;
    }
}
