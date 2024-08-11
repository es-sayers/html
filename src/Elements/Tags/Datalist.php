<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;

/**
 * Class for <datalist> HTML tag
 */
class Datalist extends Tag
{
    public function __construct(array $children, array $attributes)
    {
        parent::__construct('datalist', $children, $attributes);
    }
}
