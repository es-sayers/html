<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <figcaption> tag
 */
class Figcaption extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('figcaption', $children, $attributes);
    }
}
