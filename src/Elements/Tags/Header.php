<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <header> tag
 */
class Header extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('header', $children, $attributes);
    }
}
