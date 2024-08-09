<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Traits\Renderable;
use Esayers\Html\TypedCollection;

/**
 * Holds a collection of items that can be rendered
 */
class RenderableCollection extends TypedCollection
{
    use Renderable;

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        parent::__construct(Renderable::class, $array);
    }

    protected function renderString(): string
    {
        $renderString = '';
        foreach ($this->array as $item) {
            $renderString .= $item->render();
        }
        return $renderString;
    }
}
