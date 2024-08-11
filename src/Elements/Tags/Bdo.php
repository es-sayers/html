<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <bdo> HTML tag
 */
class Bdo extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('bdo', $children, $attributes);
    }
}
