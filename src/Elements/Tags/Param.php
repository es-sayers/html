<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <param> tag
 */
class Param extends Tag
{
    use Name;
    use Value;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('param', $children, $attributes);
    }
}
