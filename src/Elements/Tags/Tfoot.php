<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <tfoot> tag
 */
class Tfoot extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('tfoot', $children, $attributes);
    }
}
