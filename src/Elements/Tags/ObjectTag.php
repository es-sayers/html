<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Data;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Type;
use Esayers\Html\Traits\Attributes\Usemap;
use Esayers\Html\Traits\Attributes\Width;

/**
 * Class for <object> tag
 */
class ObjectTag extends Tag
{
    use Data;
    use Form;
    use Height;
    use Name;
    use Type;
    use Usemap;
    use Width;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('object', $children, $attributes);
    }
}
