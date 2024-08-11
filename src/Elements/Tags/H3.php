<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <h3> tag
 */
class H3 extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('h3', $children, $attributes);
    }
}
