<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Target;

/**
 * Class for <base> HTML tag
 */
class Base extends VoidTag
{
    use Href;
    use Target;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('base', $attributes);
    }
}
