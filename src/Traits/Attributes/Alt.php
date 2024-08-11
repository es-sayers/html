<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Alt
{
    public function alt(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('alt', $value);
        return $this;
    }
}
