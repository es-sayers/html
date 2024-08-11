<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Cite;

/**
 * Class for <q> tag
 */
class Q extends Tag
{
    use Cite;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('q', $children, $attributes);
    }
}
