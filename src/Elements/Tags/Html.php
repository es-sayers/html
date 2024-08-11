<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Xmlns;

/**
 * Class for <html> tag
 */
class Html extends Tag
{
    use Xmlns;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('html', $children, $attributes);
    }
}
