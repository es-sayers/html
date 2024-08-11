<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <small> tag
 */
class Small extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('small', $children, $attributes);
    }
}
