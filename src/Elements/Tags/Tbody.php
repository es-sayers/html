<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <tbody> tag
 */
class Tbody extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('tbody', $children, $attributes);
    }
}
