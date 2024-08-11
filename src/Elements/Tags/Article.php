<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <article> HTML tag
 */
class Article extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('article', $children, $attributes);
    }
}
