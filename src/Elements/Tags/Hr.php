<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;

/**
 * Class for <hr> tag
 */
class Hr extends VoidTag
{
    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('hr', $attributes);
    }
}
