<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Max;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <progress> tag
 */
class Progress extends Tag
{
    use Max;
    use Value;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('progress', $children, $attributes);
    }
}
