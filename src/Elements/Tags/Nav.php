<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <nav> tag
 */
class Nav extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('nav', $children, $attributes);
    }
}
