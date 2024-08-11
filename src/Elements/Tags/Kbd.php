<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <kbd> tag
 */
class Kbd extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('kbd', $children, $attributes);
    }
}
