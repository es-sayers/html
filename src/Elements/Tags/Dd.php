<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <dd> HTML tag
 */
class Dd extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('dd', $children, $attributes);
    }
}
