<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <svg> tag
 */
class Svg extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('svg', $children, $attributes);
    }
}
