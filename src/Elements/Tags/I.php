<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <i> tag
 */
class I extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('i', $children, $attributes);
    }
}
