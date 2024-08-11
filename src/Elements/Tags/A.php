<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Download;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Hreflang;
use Esayers\Html\Traits\Attributes\Media;
use Esayers\Html\Traits\Attributes\Ping;
use Esayers\Html\Traits\Attributes\Referrerpolicy;
use Esayers\Html\Traits\Attributes\Rel;
use Esayers\Html\Traits\Attributes\Target;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <a> HTML tag
 */
class A extends Tag
{
    use Download;
    use Href;
    use Hreflang;
    use Media;
    use Ping;
    use Referrerpolicy;
    use Rel;
    use Target;
    use Type;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('a', $children, $attributes);
    }
}
