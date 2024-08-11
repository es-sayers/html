<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <h6> tag
 */
class H6 extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('h6', $children, $attributes);
    }
}
