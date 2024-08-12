<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Media;
use Esayers\Html\Traits\Attributes\Type;

/**
 * Class for <style> tag
 */
class Style extends Tag
{
    use Media;
    use Type;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('style', $children, $attributes);
    }
}
