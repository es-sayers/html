<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <cite> HTML tag
 */
class Cite extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('cite', $children, $attributes);
    }
}
