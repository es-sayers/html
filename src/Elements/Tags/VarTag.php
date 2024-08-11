<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <var> tag
 */
class VarTag extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('var', $children, $attributes);
    }
}
