<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formmethod
{
    public function formmethod(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formmethod', $value);
        return $this;
    }
}
