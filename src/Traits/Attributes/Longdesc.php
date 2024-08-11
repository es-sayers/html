<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Longdesc
{
    public function longdesc(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('longdesc', $value);
        return $this;
    }
}
