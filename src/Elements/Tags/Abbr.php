<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <abbr> HTML tag
 */
class Abbr extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('abbr', $children, $attributes);
    }
}
