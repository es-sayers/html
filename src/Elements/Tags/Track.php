<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\DefaultAttribute;
use Esayers\Html\Traits\Attributes\Kind;
use Esayers\Html\Traits\Attributes\Label;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srclang;

/**
 * Class for <track> tag
 */
class Track extends Tag
{
    use DefaultAttribute;
    use Kind;
    use Label;
    use Src;
    use Srclang;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('track', $children, $attributes);
    }
}
