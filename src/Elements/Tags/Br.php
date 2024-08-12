<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;

/**
 * Class for <br> HTML tag
 */
class Br extends VoidTag
{
    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('br', $attributes);
    }
}
