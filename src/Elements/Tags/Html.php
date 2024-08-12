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

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('html', $children, $attributes);
    }
}
