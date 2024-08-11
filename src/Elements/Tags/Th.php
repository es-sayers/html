<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Abbr;
use Esayers\Html\Traits\Attributes\Colspan;
use Esayers\Html\Traits\Attributes\Headers;
use Esayers\Html\Traits\Attributes\Rowspan;
use Esayers\Html\Traits\Attributes\Scope;

/**
 * Class for <th> tag
 */
class Th extends Tag
{
    use Abbr;
    use Colspan;
    use Headers;
    use Rowspan;
    use Scope;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('th', $children, $attributes);
    }
}
