<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\Width;

/**
 * Class for <canvas> HTML tag
 */
class Canvas extends Tag
{
    use Height;
    use Width;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('canvas', $children, $attributes);
    }
}
