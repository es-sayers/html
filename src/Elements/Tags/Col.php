<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Span;

/**
 * Class for <col> HTML tag
 */
class Col extends Tag
{
    use Span;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('col', $children, $attributes);
    }
}
