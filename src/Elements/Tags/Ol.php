<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Reversed;
use Esayers\Html\Traits\Attributes\Start;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <ol> tag
 */
class Ol extends Tag
{
    use Reversed;
    use Start;
    use Type;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('ol', $children, $attributes);
    }
}
