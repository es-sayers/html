<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Autoplay;
use Esayers\Html\Traits\Attributes\Controls;
use Esayers\Html\Traits\Attributes\Loop;
use Esayers\Html\Traits\Attributes\Muted;
use Esayers\Html\Traits\Attributes\Preload;
use Esayers\Html\Traits\Attributes\Src;

/**
 * Class for <audio> HTML tag
 */
class Audio extends Tag
{
    use Autoplay;
    use Controls;
    use Loop;
    use Muted;
    use Preload;
    use Src;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('audio', $children, $attributes);
    }
}
