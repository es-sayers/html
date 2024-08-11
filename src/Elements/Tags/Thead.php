<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <thead> tag
 */
class Thead extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('thead', $children, $attributes);
    }
}
