<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <param> tag
 */
class Param extends VoidTag
{
    use Name;
    use Value;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('param', $attributes);
    }
}
