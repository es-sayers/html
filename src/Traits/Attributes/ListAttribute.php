<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ListAttribute
{
    public function list(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('list', $value);
        return $this;
    }
}
