<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Alt;
use Esayers\Html\Traits\Attributes\Coords;
use Esayers\Html\Traits\Attributes\Download;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Hreflang;
use Esayers\Html\Traits\Attributes\Media;
use Esayers\Html\Traits\Attributes\Referrerpolicy;
use Esayers\Html\Traits\Attributes\Rel;
use Esayers\Html\Traits\Attributes\Shape;
use Esayers\Html\Traits\Attributes\Target;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <area> HTML tag
 */
class Area extends Tag
{
    use Alt;
    use Coords;
    use Download;
    use Href;
    use Hreflang;
    use Media;
    use Referrerpolicy;
    use Rel;
    use Shape;
    use Target;
    use Type;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('area', $children, $attributes);
    }
}
