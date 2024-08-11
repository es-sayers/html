<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <div> tag
 */
class Div extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('div', $children, $attributes);
    }
}
