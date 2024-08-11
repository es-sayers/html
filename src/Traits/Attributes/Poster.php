<?php

namespace Esayers\Html\Traits\Attributes;

trait Poster
{
    public function poster(string|bool|array $value)
    {
        $this->setAttribute('poster', $value);
    }
}
