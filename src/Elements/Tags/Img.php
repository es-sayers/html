<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Alt;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\Ismap;
use Esayers\Html\Traits\Attributes\Loading;
use Esayers\Html\Traits\Attributes\Longdesc;
use Esayers\Html\Traits\Attributes\Referrerpolicy;
use Esayers\Html\Traits\Attributes\Sizes;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srcset;
use Esayers\Html\Traits\Attributes\Usemap;
use Esayers\Html\Traits\Attributes\Width;

/**
 * Class for <img> tag
 */
class Img extends Tag
{
    use Alt;
    use Height;
    use Ismap;
    use Loading;
    use Longdesc;
    use Referrerpolicy;
    use Sizes;
    use Src;
    use Srcset;
    use Usemap;
    use Width;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('img', $children, $attributes);
    }
}
