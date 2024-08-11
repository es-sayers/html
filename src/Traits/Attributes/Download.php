<?php

namespace Esayers\Html\Traits\Attributes;

trait Download
{
    
    public function download(string|bool|array $value)
    {
        $this->setAttribute('download', $value);
    }
}
