<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <wbr> tag
 */
class Wbr extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('wbr', $children, $attributes);
    }
}
