<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Download
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function download(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('download', $value);
        return $this;
    }
}
