<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Label;
use Esayers\Html\Traits\Attributes\Selected;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <option> tag
 */
class Option extends Tag
{
    use Disabled;
    use Label;
    use Selected;
    use Value;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('option', $children, $attributes);
    }
}
