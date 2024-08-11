<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <rp> tag
 */
class Rp extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('rp', $children, $attributes);
    }
}
