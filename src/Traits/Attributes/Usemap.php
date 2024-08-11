<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Usemap
{
    public function usemap(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('usemap', $value);
        return $this;
    }
}
