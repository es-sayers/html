<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <ruby> tag
 */
class Ruby extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('ruby', $children, $attributes);
    }
}
