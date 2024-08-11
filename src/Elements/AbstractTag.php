<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Traits\Attributes\GlobalAttribute;
use Esayers\Html\Traits\Renderable;

abstract class AbstractTag
{
    use GlobalAttribute;
    use Renderable;

    /**
     * HTML Tag Name
     * @var string
     */
    protected string $name = '';

    public function __construct(string $name, array $attributes = [])
    {
        $this->name = $name;
        $this->attributes  = $attributes;
    }

    /**
     * @return string
     */
    final public function getName(): string
    {
        return $this->name;
    }
}
