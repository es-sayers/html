<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Charset;
use Esayers\Html\Traits\Attributes\Content;
use Esayers\Html\Traits\Attributes\Httpequiv;
use Esayers\Html\Traits\Attributes\Name;

/**
 * Class for <meta> tag
 */
class Meta extends Tag
{
    use Charset;
    use Content;
    use Httpequiv;
    use Name;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('meta', $children, $attributes);
    }
}
