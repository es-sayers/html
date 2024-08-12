<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\ForAttribute;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Name;

/**
 * Class for <output> tag
 */
class Output extends Tag
{
    use ForAttribute;
    use Form;
    use Name;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('output', $children, $attributes);
    }
}
