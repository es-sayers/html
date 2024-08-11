<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Name;

/**
 * Class for <fieldset> tag
 */
class Fieldset extends Tag
{
    use Disabled;
    use Form;
    use Name;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('fieldset', $children, $attributes);
    }
}
