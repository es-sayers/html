<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <embed> tag
 */
class Embed extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('embed', $children, $attributes);
    }
}
