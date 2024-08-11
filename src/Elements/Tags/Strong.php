<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <strong> tag
 */
class Strong extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('strong', $children, $attributes);
    }
}
