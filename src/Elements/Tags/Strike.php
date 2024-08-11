<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <strike> tag
 */
class Strike extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('strike', $children, $attributes);
    }
}
