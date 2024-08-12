<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Media;
use Esayers\Html\Traits\Attributes\Sizes;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srcset;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <source> tag
 */
class Source extends Tag
{
    use Media;
    use Sizes;
    use Src;
    use Srcset;
    use Type;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('source', $children, $attributes);
    }
}
