<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <title> tag
 */
class Title extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('title', $children, $attributes);
    }
}
