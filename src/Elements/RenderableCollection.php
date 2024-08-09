<?php

namespace Esayers\Html\Elements;

use Esayers\Html\AbstractRenderable;
use Esayers\Html\Elements\Tag;
use Esayers\Html\TypedCollection;

class RenderableCollection extends AbstractRenderable
{
    /**
     * @var TypedCollection
     */
    private TypedCollection $tags;

    /**
     * @param Tag[] $tags
     */
    public function __construct(array $tags = [])
    {
        $this->tags = new TypedCollection(Tag::class, $tags);
    }

    protected function renderString(): string
    {
        $renderString = '';
        foreach ($this->tags as $tag) {
            $renderString .= $tag->render();
        }
        return $renderString;
    }
}
