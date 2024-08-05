<?php

namespace Esayers\Html;

/**
 * Provides ability to render plain text
 */
class Text implements RenderableInterface
{
    /**
     * @var string
     */
    private string $textContent = '';

    /**
     * @param string $textContent Content to be rendered
     */
    public function __construct(string $textContent)
    {
        $this->textContent = $textContent;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return htmlspecialchars($this->textContent);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->render();
    }
}
