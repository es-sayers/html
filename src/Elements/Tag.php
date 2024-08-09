<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Attribute;
use Esayers\Html\Elements\RenderableCollection;
use Esayers\Html\Elements\AbstractTag;

/**
 * Implements normal HTML tags
 */
class Tag extends AbstractTag
{
    /**
     * @var \Esayers\Html\Elements\RenderableCollection Children to be rendered inside of this tag
     */
    protected RenderableCollection $children;

    /**
     * @param string $name HTML Tag name
     * @param \Esayers\Html\Traits\Renderable[] $children (optional)
     * @param array $attributes (optional) HTML attributes
     */
    public function __construct(string $name, array $children = [], array $attributes = [])
    {
        $this->children = new RenderableCollection($children);
        parent::__construct($name, $attributes);
    }

    /**
     * @return \Esayers\Html\Elements\RenderableCollection $children
     */
    public function children(): RenderableCollection
    {
        return $this->children;
    }

    /**
     * Construct the HTML for this tag including child elements
     * @return string HTML
     */
    public function renderString(): string
    {
        $str = '<' . $this->name . Attribute::renderAttributes($this->attributes) .  '>';
        foreach ($this->children as $child) {
            $str .= $child->render();
        }
        $str .= '</' . $this->name . '>';
        return $str;
    }
}
