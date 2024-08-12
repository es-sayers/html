<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Autofocus;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Multiple;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Required;
use Esayers\Html\Traits\Attributes\Size;

/**
 * Class for <select> tag
 */
class Select extends Tag
{
    use Autofocus;
    use Disabled;
    use Form;
    use Multiple;
    use Name;
    use Required;
    use Size;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('select', $children, $attributes);
    }
}
