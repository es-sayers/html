<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\EncodedString;

trait GlobalAttribute
{
    /**
     * @var array
     */
    protected array $attributes = [];

    /**
     * @param string $name Attribute name
     * @param string|array|bool $value Attribute value
     * @return void
     */
    final public function setAttribute(string $name, string|array|bool $value): void
    {
        $this->attributes[$name] = $value;
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

    public function accesskey(string|array|bool $value)
    {
        $this->setAttribute('accesskey', $value);
    }
    public function class(string|array|bool $value)
    {
        $this->setAttribute('class', $value);
    }
    public function contenteditable(string|array|bool $value)
    {
        $this->setAttribute('contenteditable', $value);
    }
    public function dir(string|array|bool $value)
    {
        $this->setAttribute('dir', $value);
    }
    public function draggable(string|array|bool $value)
    {
        $this->setAttribute('draggable', $value);
    }
    public function enterkeyhint(string|array|bool $value)
    {
        $this->setAttribute('enterkeyhint', $value);
    }
    public function hidden(string|array|bool $value)
    {
        $this->setAttribute('hidden', $value);
    }
    public function id(string|array|bool $value)
    {
        $this->setAttribute('id', $value);
    }
    public function inert(string|array|bool $value)
    {
        $this->setAttribute('inert', $value);
    }
    public function inputmode(string|array|bool $value)
    {
        $this->setAttribute('inputmode', $value);
    }
    public function lang(string|array|bool $value)
    {
        $this->setAttribute('lang', $value);
    }
    public function popover(string|array|bool $value)
    {
        $this->setAttribute('popover', $value);
    }
    public function spellcheck(string|array|bool $value)
    {
        $this->setAttribute('spellcheck', $value);
    }
    public function style(string|array|bool $value)
    {
        $this->setAttribute('style', $value);
    }
    public function tabindex(string|array|bool $value)
    {
        $this->setAttribute('tabindex', $value);
    }
    public function title(string|array|bool $value)
    {
        $this->setAttribute('title', $value);
    }
    public function translate(string|array|bool $value)
    {
        $this->setAttribute('translate', $value);
    }
}
