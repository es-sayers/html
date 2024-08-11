<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Autofocus;
use Esayers\Html\Traits\Attributes\Cols;
use Esayers\Html\Traits\Attributes\Dirname;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Maxlength;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Placeholder;
use Esayers\Html\Traits\Attributes\ReadonlyAttribute;
use Esayers\Html\Traits\Attributes\Required;
use Esayers\Html\Traits\Attributes\Rows;
use Esayers\Html\Traits\Attributes\Wrap;

/**
 * Class for <textarea> tag
 */
class Textarea extends Tag
{
    use Autofocus;
    use Cols;
    use Dirname;
    use Disabled;
    use Form;
    use Maxlength;
    use Name;
    use Placeholder;
    use ReadonlyAttribute;
    use Required;
    use Rows;
    use Wrap;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('textarea', $children, $attributes);
    }
}
