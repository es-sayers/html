<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <dl> tag
 */
class Dl extends Tag
{
    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('dl', $children, $attributes);
    }
}