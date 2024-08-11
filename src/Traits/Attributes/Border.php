<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Border
{
    public function border(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('border', $value);
        return $this;
    }
}
