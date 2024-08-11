<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <hgroup> tag
 */
class Hgroup extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('hgroup', $children, $attributes);
    }
}
