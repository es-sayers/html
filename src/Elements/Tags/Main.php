<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <main> tag
 */
class Main extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('main', $children, $attributes);
    }
}
