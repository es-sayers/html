<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <ul> tag
 */
class Ul extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('ul', $children, $attributes);
    }
}
