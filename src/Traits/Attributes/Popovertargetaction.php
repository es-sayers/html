<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Popovertargetaction
{
    public function popovertargetaction(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('popovertargetaction', $value);
        return $this;
    }
}
