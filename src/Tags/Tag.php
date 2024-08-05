<?php

namespace Esayers\Html\Tags;

use Esayers\Html\RenderableInterface;
use Esayers\Html\Tags\AbstractTag;

/**
 * Implements normal HTML tags
 */
class Tag extends AbstractTag
{
    /**
     * Children to be rendered inside of this tag
     * @var \Esayers\Html\RenderableInterface[]
     */
    protected array $children;

    /**
     * @param string $name HTML Tag name
     * @param \Esayers\Html\RenderableInterface[] $children (optional) Children
     */
    public function __construct(string $name, array $children = [])
    {
        $this->children = $children;
        parent::__construct($name);
    }

    /**
     * Construct the HTML for this tag including child elements
     * @return string HTML
     */
    public function render(): string
    {
        $str = '<' . $this->name . '>';
        foreach ($this->children as $child) {
            $str .= $child->render();
        }
        $str .= '</' . $this->name . '>';
        return $str;
    }

    /**
     * Appends a child to the end of the children array
     * @param \Esayers\Html\RenderableInterface $child
     * @return $this
     */
    public function child(RenderableInterface $child): Tag
    {
        array_push($this->children, $child);
        return $this;
    }

    /**
     * Appends array of children to the end of the children array
     * @param \Esayers\Html\RenderableInterface[] $children
     * @return $this
     */
    public function children(array $children): Tag
    {
        $this->children = array_merge($this->children, $children);
        return $this;
    }

    /**
     * @return \Esayers\Html\RenderableInterface[] $children
     */
    public function getChildren(): array
    {
        return $this->children;
    }
}
