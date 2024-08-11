<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <u> tag
 */
class U extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('u', $children, $attributes);
    }
}
