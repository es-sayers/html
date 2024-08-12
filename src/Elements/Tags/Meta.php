<?php

namespace Esayers\Html\Elements\Tags;

use Esayers\Html\Elements\VoidTag;
use Esayers\Html\Traits\Attributes\Charset;
use Esayers\Html\Traits\Attributes\Content;
use Esayers\Html\Traits\Attributes\Httpequiv;
use Esayers\Html\Traits\Attributes\Name;

/**
 * Class for <meta> tag
 */
class Meta extends VoidTag
{
    use Charset;
    use Content;
    use Httpequiv;
    use Name;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('meta', $attributes);
    }
}
