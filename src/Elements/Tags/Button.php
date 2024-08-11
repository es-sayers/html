<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Autofocus;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Formaction;
use Esayers\Html\Traits\Attributes\Formenctype;
use Esayers\Html\Traits\Attributes\Formmethod;
use Esayers\Html\Traits\Attributes\Formnovalidate;
use Esayers\Html\Traits\Attributes\Formtarget;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Popovertarget;
use Esayers\Html\Traits\Attributes\Popovertargetaction;
use Esayers\Html\Traits\Attributes\Type;
use Esayers\Html\Traits\Attributes\Value;

/**
 * Class for <button> HTML tag
 */
class Button extends Tag
{
    use Autofocus;
    use Disabled;
    use Form;
    use Formaction;
    use Formenctype;
    use Formmethod;
    use Formnovalidate;
    use Formtarget;
    use Popovertarget;
    use Popovertargetaction;
    use Name;
    use Type;
    use Value;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('button', $children, $attributes);
    }
}
