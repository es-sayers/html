<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <p> tag
 */
class P extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('p', $children, $attributes);
    }
}
