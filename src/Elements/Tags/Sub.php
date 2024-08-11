<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <sub> tag
 */
class Sub extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('sub', $children, $attributes);
    }
}
