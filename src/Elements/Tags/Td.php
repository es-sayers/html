<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Colspan;
use Esayers\Html\Traits\Attributes\Headers;
use Esayers\Html\Traits\Attributes\Rowspan;

/**
 * Class for <td> tag
 */
class Td extends Tag
{
    use Colspan;
    use Headers;
    use Rowspan;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('td', $children, $attributes);
    }
}
