<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <rt> tag
 */
class Rt extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('rt', $children, $attributes);
    }
}
