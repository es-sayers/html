<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <h1> tag
 */
class H1 extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('h1', $children, $attributes);
    }
}
