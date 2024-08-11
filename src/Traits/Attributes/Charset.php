<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Charset
{
    public function charset(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('charset', $value);
        return $this;
    }
}
