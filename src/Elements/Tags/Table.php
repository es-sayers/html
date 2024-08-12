<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <table> tag
 */
class Table extends Tag
{
    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('table', $children, $attributes);
    }
}
