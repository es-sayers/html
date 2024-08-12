<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Target;

/**
 * Class for <base> HTML tag
 */
class Base extends Tag
{
    use Href;
    use Target;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('base', $children, $attributes);
    }
}
