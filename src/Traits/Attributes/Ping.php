<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Ping
{
    public function ping(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('ping', $value);
        return $this;
    }
}
