<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Cite;

/**
 * Class for <blockquote> HTML tag
 */
class Blockquote extends Tag
{
    use Cite;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('blockquote', $children, $attributes);
    }
}
