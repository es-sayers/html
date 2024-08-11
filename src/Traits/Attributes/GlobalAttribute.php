<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\EncodedString;

trait GlobalAttribute
{
    use Dir;
    use ClassAttribute;
    use Accesskey;
    use ForAttribute;
    use Lang;
    use Popover;
    use Draggable;
    use Enterkeyhint;
    use Hidden;
    use Id;
    use Inert;
    use Inputmode;
    use Spellcheck;
    use Style;
    use Tabindex;
    use Title;
    use Translate;


    /**
     * @var array Holds attribute data
     */
    protected array $attributes = [];

    /**
     * @var array Defines which attributes the element can use
     */
    protected array $attributeAccess = [];

    /**
     * @param string $name Attribute name
     * @param string|array|bool $value Attribute value
     * @return $this
     */
    final protected function setAttribute(string $name, string|array|bool $value): mixed
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @return array
     */
    final public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * Renders the attributes into a string
     * @todo implement
     * @return string
     */
    final protected function renderAttributes(): string
    {
        return '';
    }
}
