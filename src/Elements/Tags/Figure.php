<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <figure> tag
 */
class Figure extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('figure', $children, $attributes);
    }
}
