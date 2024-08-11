<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Open;

/**
 * Class for <dialog> tag
 */
class Dialog extends Tag
{
    use Open;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('dialog', $children, $attributes);
    }
}
