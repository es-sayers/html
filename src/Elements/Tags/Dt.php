<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <dt> tag
 */
class Dt extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('dt', $children, $attributes);
    }
}
