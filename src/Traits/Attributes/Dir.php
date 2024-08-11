<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Dir
{
    public function dir(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('dir', $value);
        return $this;
    }
}
