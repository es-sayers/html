<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\ForAttribute;
use Esayers\Html\Traits\Attributes\Form;

/**
 * Class for <label> tag
 */
class Label extends Tag
{
    use ForAttribute;
    use Form;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('label', $children, $attributes);
    }
}
