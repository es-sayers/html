<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Autocomplete
{
    public function autocomplete(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('autocomplete', $value);
        return $this;
    }
}
