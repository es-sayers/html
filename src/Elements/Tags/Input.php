<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Accept;
use Esayers\Html\Traits\Attributes\Alt;
use Esayers\Html\Traits\Attributes\Autocomplete;
use Esayers\Html\Traits\Attributes\Autofocus;
use Esayers\Html\Traits\Attributes\Checked;
use Esayers\Html\Traits\Attributes\Dirname;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Formaction;
use Esayers\Html\Traits\Attributes\Formenctype;
use Esayers\Html\Traits\Attributes\Formmethod;
use Esayers\Html\Traits\Attributes\Formnovalidate;
use Esayers\Html\Traits\Attributes\Formtarget;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\ListAttribute;
use Esayers\Html\Traits\Attributes\Max;
use Esayers\Html\Traits\Attributes\Maxlength;
use Esayers\Html\Traits\Attributes\Min;
use Esayers\Html\Traits\Attributes\Minlength;
use Esayers\Html\Traits\Attributes\Multiple;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Pattern;
use Esayers\Html\Traits\Attributes\Placeholder;
use Esayers\Html\Traits\Attributes\Popovertarget;
use Esayers\Html\Traits\Attributes\Popovertargetaction;
use Esayers\Html\Traits\Attributes\ReadonlyAttribute;
use Esayers\Html\Traits\Attributes\Required;
use Esayers\Html\Traits\Attributes\Size;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Step;
use Esayers\Html\Traits\Attributes\Type;
use Esayers\Html\Traits\Attributes\Value;
use Esayers\Html\Traits\Attributes\Width;

/**
 * Class for <input> tag
 */
class Input extends Tag
{
    use Accept;
    use Alt;
    use Autocomplete;
    use Autofocus;
    use Checked;
    use Dirname;
    use Disabled;
    use Form;
    use Formaction;
    use Formenctype;
    use Formmethod;
    use Formnovalidate;
    use Formtarget;
    use Height;
    use ListAttribute;
    use Max;
    use Maxlength;
    use Min;
    use Minlength;
    use Multiple;
    use Name;
    use Pattern;
    use Placeholder;
    use Popovertarget;
    use Popovertargetaction;
    use ReadonlyAttribute;
    use Required;
    use Size;
    use Src;
    use Step;
    use Type;
    use Value;
    use Width;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('input', $children, $attributes);
    }
}
