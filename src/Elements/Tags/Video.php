<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Autoplay;
use Esayers\Html\Traits\Attributes\Controls;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\Loop;
use Esayers\Html\Traits\Attributes\Muted;
use Esayers\Html\Traits\Attributes\Poster;
use Esayers\Html\Traits\Attributes\Preload;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Width;

/**
 * Class for <video> tag
 */
class Video extends Tag
{
    use Autoplay;
    use Controls;
    use Height;
    use Loop;
    use Muted;
    use Poster;
    use Preload;
    use Src;
    use Width;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('video', $children, $attributes);
    }
}
