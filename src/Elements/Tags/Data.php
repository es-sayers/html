<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <data> HTML tag
 */
class Data extends Tag
{
    use Value;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('data', $children, $attributes);
    }
}
