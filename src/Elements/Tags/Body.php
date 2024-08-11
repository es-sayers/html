<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <body> HTML tag
 */
class Body extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('body', $children, $attributes);
    }
}
