<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Datetime;

/**
 * Class for <time> tag
 */
class Time extends Tag
{
    use Datetime;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('time', $children, $attributes);
    }
}
