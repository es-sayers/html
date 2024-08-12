<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Helpers\Arr;
use Esayers\Html\Attribute;
use Esayers\Html\Elements\AbstractTag;

/**
 * Implements normal HTML tags
 */
class Tag extends AbstractTag
{
    /**
     * @var array Children to be rendered inside of this tag
     */
    protected array $children;

    /**
     * @param string $name HTML Tag name
     * @param \Esayers\Html\Renderable[] $children (optional)
     * @param array $attributes (optional) HTML attributes
     */
    public function __construct(string $name, array $children = [], array $attributes = [])
    {
        $this->children = $children;
        parent::__construct($name, $attributes);
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @return void
     */
    public function clearChildren() : void {
        $this->children = [];
    }

    /**
     * @param \Esayers\Html\Renderable $child
     * @return void
     */
    public function child(mixed $child) : void{
        Arr::append($this->children, $child);
    }

    /**
     * @param \Esayers\Html\Renderable[] $child
     * @return void
     */
    public function children(array $children) : void{
        Arr::appendAll($this->children, $children);
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
