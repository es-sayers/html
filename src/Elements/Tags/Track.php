<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;
use Esayers\Html\Traits\Attributes\DefaultAttribute;
use Esayers\Html\Traits\Attributes\Kind;
use Esayers\Html\Traits\Attributes\Label;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srclang;

/**
 * Class for <track> tag
 */
class Track extends VoidTag
{
    use DefaultAttribute;
    use Kind;
    use Label;
    use Src;
    use Srclang;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('track', $attributes);
    }
}
