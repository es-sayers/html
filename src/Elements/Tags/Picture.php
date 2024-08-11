<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <picture> tag
 */
class Picture extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('picture', $children, $attributes);
    }
}
