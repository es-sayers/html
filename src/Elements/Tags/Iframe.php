<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Allow;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\Loading;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Referrerpolicy;
use Esayers\Html\Traits\Attributes\Sandbox;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srcdoc;
use Esayers\Html\Traits\Attributes\Width;

/**
 * Class for <iframe> tag
 */
class Iframe extends Tag
{
    use Allow;
    use Height;
    use Loading;
    use Name;
    use Referrerpolicy;
    use Sandbox;
    use Src;
    use Srcdoc;
    use Width;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('iframe', $children, $attributes);
    }
}
