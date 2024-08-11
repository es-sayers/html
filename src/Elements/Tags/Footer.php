<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <footer> tag
 */
class Footer extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('footer', $children, $attributes);
    }
}
