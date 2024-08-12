<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\High;
use Esayers\Html\Traits\Attributes\Low;
use Esayers\Html\Traits\Attributes\Max;
use Esayers\Html\Traits\Attributes\Min;
use Esayers\Html\Traits\Attributes\Optimum;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <meter> tag
 */
class Meter extends Tag
{
    use Form;
    use High;
    use Low;
    use Max;
    use Min;
    use Optimum;
    use Value;

    /**
     * @param array $children
     * @param array $attributes
     */
    public function __construct(array $children = [], array $attributes = [])
    {
        parent::__construct('meter', $children, $attributes);
    }
}
