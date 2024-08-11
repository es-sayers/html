<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <summary> tag
 */
class Summary extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('summary', $children, $attributes);
    }
}
