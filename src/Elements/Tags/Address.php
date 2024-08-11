<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <address> HTML tag
 */
class Address extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('address', $children, $attributes);
    }
}
