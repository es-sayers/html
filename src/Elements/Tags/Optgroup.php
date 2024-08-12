<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Label;

/**
 * Class for <optgroup> tag
 */
class Optgroup extends Tag
{
    use Disabled;
    use Label;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('optgroup', $children, $attributes);
    }
}
