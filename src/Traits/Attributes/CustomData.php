<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait CustomData
{
    /**
     * Custom data-* HTML Attribute
     * @param string $key Custom data name, data-$key
     * @param string $value
     * @return $this
     */
    public function customData(string $key, string $value): AbstractTag
    {
        $this->setAttribute('data-' . $key, $value);
        return $this;
    }
}
