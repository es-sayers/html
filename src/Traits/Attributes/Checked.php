<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Checked
{
    public function checked(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('checked', $value);
        return $this;
    }
}
