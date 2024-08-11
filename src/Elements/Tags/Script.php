<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Async;
use Esayers\Html\Traits\Attributes\Defer;
use Esayers\Html\Traits\Attributes\Referrerpolicy;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <script> tag
 */
class Script extends Tag
{
    use Async;
    use Defer;
    use Referrerpolicy;
    use Src;
    use Type;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('script', $children, $attributes);
    }
}
