<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <h4> tag
 */
class H4 extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('h4', $children, $attributes);
    }
}
