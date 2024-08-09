<?php

namespace Esayers\Html\Elements;

use Esayers\Html\Traits\EncodedRenderable;

class EncodedString
{
    use EncodedRenderable;

    /**
     * Raw text to render
     * @var string
     */
    protected string $string;

    /**
     * @param string $string Unencoded string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * Static constructor alias
     *
     * @param string $string Unencoded string
     * @return EncodedString
     */
    public static function new(string $string): EncodedString
    {
        return new static($string);
    }

    /**
     * Shortcut to render encoded string
     *
     * @param string $string Unencoded string
     * @return string Encoded string
     */
    public static function from(string $string): string
    {
        return (new static($string))->render();
    }

    /**
     * @inheritDoc
     */
    protected function renderString(): string
    {
        return $this->string;
    }
}
