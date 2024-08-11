<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Cite;
use Esayers\Html\Traits\Attributes\Datetime;

/**
 * Class for <del> tag
 */
class Del extends Tag
{
    use Cite;
    use Datetime;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('del', $children, $attributes);
    }
}
