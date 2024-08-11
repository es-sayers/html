<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <span> tag
 */
class Span extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('span', $children, $attributes);
    }
}
