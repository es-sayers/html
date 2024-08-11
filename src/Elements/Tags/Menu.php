<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <menu> tag
 */
class Menu extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('menu', $children, $attributes);
    }
}
