<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <dfn> tag
 */
class Dfn extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('dfn', $children, $attributes);
    }
}
