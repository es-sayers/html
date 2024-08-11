<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Hidden
{
    public function hidden(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('hidden', $value);
        return $this;
    }
}
