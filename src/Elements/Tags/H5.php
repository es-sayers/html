<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <h5> tag
 */
class H5 extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('h5', $children, $attributes);
    }
}
