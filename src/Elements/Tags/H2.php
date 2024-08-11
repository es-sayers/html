<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <h2> tag
 */
class H2 extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('h2', $children, $attributes);
    }
}
