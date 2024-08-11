<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <sup> tag
 */
class Sup extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('sup', $children, $attributes);
    }
}
