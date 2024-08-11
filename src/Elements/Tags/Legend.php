<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <legend> tag
 */
class Legend extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('legend', $children, $attributes);
    }
}
