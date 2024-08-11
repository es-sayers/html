<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Referrerpolicy
{
    public function referrerpolicy(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('referrerpolicy', $value);
        return $this;
    }
}
