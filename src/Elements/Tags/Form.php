<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Action;
use Esayers\Html\Traits\Attributes\Autocomplete;
use Esayers\Html\Traits\Attributes\Enctype;
use Esayers\Html\Traits\Attributes\Method;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Novalidate;
use Esayers\Html\Traits\Attributes\Rel;
use Esayers\Html\Traits\Attributes\Target;

/**
 * Class for <form> tag
 * @todo add accept-charset
 */
class Form extends Tag
{
    use Action;
    use Autocomplete;
    use Enctype;
    use Method;
    use Name;
    use Novalidate;
    use Rel;
    use Target;

    public function __construct(array $children, array $attributes)
    {
        parent::__construct('form', $children, $attributes);
    }
}
