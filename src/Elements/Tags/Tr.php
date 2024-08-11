<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <tr> tag
 */
class Tr extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('tr', $children, $attributes);
    }
}
