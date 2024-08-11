<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <pre> tag
 */
class Pre extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('pre', $children, $attributes);
    }
}
