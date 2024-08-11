<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <li> tag
 */
class Li extends Tag
{
    use Value;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('li', $children, $attributes);
    }
}
