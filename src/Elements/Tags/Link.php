<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Hreflang;
use Esayers\Html\Traits\Attributes\Media;
use Esayers\Html\Traits\Attributes\Referrerpolicy;
use Esayers\Html\Traits\Attributes\Rel;
use Esayers\Html\Traits\Attributes\Sizes;
use Esayers\Html\Traits\Attributes\Title;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <link> tag
 */
class Link extends Tag
{
    use Href;
    use Hreflang;
    use Media;
    use Referrerpolicy;
    use Rel;
    use Sizes;
    use Title;
    use Type;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('link', $children, $attributes);
    }
}
