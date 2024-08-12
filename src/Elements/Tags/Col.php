<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;
use Esayers\Html\Traits\Attributes\Span;

/**
 * Class for <col> HTML tag
 */
class Col extends VoidTag
{
    use Span;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('col', $attributes);
    }
}
