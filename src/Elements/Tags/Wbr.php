<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;

/**
 * Class for <wbr> tag
 */
class Wbr extends VoidTag
{
    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('wbr', $attributes);
    }
}
