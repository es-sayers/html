<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Poster
{
    public function poster(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('poster', $value);
        return $this;
    }
}
