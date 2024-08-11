<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <b> HTML tag
 */
class B extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('b', $children, $attributes);
    }
}
