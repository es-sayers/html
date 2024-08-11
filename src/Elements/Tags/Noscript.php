<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <noscript> tag
 */
class Noscript extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('noscript', $children, $attributes);
    }
}
