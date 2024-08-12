<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Cite;
use Esayers\Html\Traits\Attributes\Datetime;

/**
 * Class for <ins> tag
 */
class Ins extends Tag
{
    use Cite;
    use Datetime;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('ins', $children, $attributes);
    }
}
