<?php

namespace Esayers\Html;

use Esayers\Html\Tags\AbstractTag;
use Esayers\Html\Tags\Tag;
use Esayers\Html\Tags\VoidTag;

/**
 * Static class that provides functions for creating HTML elements
 */
class Html
{
    /**
     * List of HTML tags
     * @var string[]
     */
    public const TAGS = ['a', 'abbr', 'acronym', 'address', 'applet', 'area', 'article', 'aside', 'audio', 'b', 'base', 'basefont', 'bdi', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup', 'data', 'datalist', 'dd', 'del', 'details', 'dfn', 'dialog', 'dir', 'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'font', 'footer', 'form', 'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 'html', 'i', 'iframe', 'img', 'input', 'ins', 'kbd', 'label', 'legend', 'li', 'link', 'main', 'map', 'mark', 'menu', 'meta', 'meter', 'nav', 'noframes', 'noscript', 'object', 'ol', 'optgroup', 'option', 'output', 'p', 'param', 'picture', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script', 'search', 'section', 'select', 'small', 'source', 'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'svg', 'table', 'tbody', 'td', 'template', 'textarea', 'tfoot', 'th', 'thead', 'time', 'title', 'tr', 'track', 'tt', 'u', 'ul', 'var', 'video', 'wbr', ]; //phpcs:ignore

    /**
     * List of HTML void tags that do not have a closing tag
     */
    public const VOID_TAGS = ['area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source', 'track', 'wbr']; //phpcs:ignore

    /**
     * Creates an HTML tag based on the method name
     * @param string $name Name of method called
     * @param array $arguments Arguments supplied in method call
     * @return AbstractTag|null Returns null when call is not in {@see self::TAGS}
     */
    public static function __callStatic(string $name, array $arguments): AbstractTag|null
    {
        if (in_array($name, self::VOID_TAGS)) {
            $attributes = isset($arguments[0]) ? self::getChildrenFromArgument($arguments[0]) : [];
            return new VoidTag($name, $attributes);
        } elseif (in_array($name, self::TAGS)) {
            $children = isset($arguments[0]) ? self::getChildrenFromArgument($arguments[0]) : [];
            $attributes = isset($arguments[1]) ? self::getChildrenFromArgument($arguments[1]) : [];
            return new Tag($name, $children, $attributes);
        }
        return null;
    }

    /**
     * Wraps argument passed as \Esayers\Html\RenderableInterface into an array
     * @param \Esayers\Html\RenderableInterface|\Esayers\Html\RenderableInterface[] $arg
     * @return \Esayers\Html\RenderableInterface[]
     */
    private static function getChildrenFromArgument($arg): array
    {
        $children = [];
        if (is_array($arg)) {
            $children = $arg;
        } else {
            $children = [$arg];
        }
        return $children;
    }

    /**
     * Creates a new \Esayers\Html\Text
     * @param string $textContent
     * @return \Esayers\Html\Text
     */
    public static function text(string $textContent): Text
    {
        return new Text($textContent);
    }
}
