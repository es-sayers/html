<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <caption> HTML tag
 */
class Caption extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('caption', $children, $attributes);
    }
}
