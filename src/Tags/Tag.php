<?php

namespace Esayers\Html\Tags;

use Esayers\Html\Attribute;
use Esayers\Html\Collection;
use Esayers\Html\Tags\AbstractTag;

/**
 * Implements normal HTML tags
 */
class Tag extends AbstractTag
{
    /**
     * @var \Esayers\Html\Collection Children to be rendered inside of this tag
     */
    protected Collection $children;

    /**
     * @param string $name HTML Tag name
     * @param \Esayers\Html\RenderableInterface[] $children (optional)
     * @param array $attributes (optional) HTML attributes
     */
    public function __construct(string $name, array $children = [], array $attributes = [])
    {
        $this->children = new Collection($children);
        parent::__construct($name, $attributes);
    }

    /**
     * @return Collection $children
     */
    public function children(): Collection
    {
        return $this->children;
    }

    /**
     * Construct the HTML for this tag including child elements
     * @return string HTML
     */
    public function render(): string
    {
        $str = '<' . $this->name . Attribute::renderAttributes($this->attributes) .  '>';
        foreach ($this->children as $child) {
            $str .= $child->render();
        }
        $str .= '</' . $this->name . '>';
        return $str;
    }
}
