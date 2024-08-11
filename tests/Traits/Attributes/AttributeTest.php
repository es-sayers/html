<?php

namespace Esayers\Html\Tests\Traits\Attributes;

use Esayers\Html\Traits\Attributes\GlobalAttribute;
use Esayers\Html\Traits\Attributes\Accesskey;
use Esayers\Html\Traits\Attributes\ClassAttribute;
use Esayers\Html\Traits\Attributes\Contenteditable;
use Esayers\Html\Traits\Attributes\Dir;
use Esayers\Html\Traits\Attributes\Draggable;
use Esayers\Html\Traits\Attributes\Enterkeyhint;
use Esayers\Html\Traits\Attributes\Hidden;
use Esayers\Html\Traits\Attributes\Id;
use Esayers\Html\Traits\Attributes\Inert;
use Esayers\Html\Traits\Attributes\Inputmode;
use Esayers\Html\Traits\Attributes\Lang;
use Esayers\Html\Traits\Attributes\Popover;
use Esayers\Html\Traits\Attributes\Spellcheck;
use Esayers\Html\Traits\Attributes\Style;
use Esayers\Html\Traits\Attributes\Tabindex;
use Esayers\Html\Traits\Attributes\Title;
use Esayers\Html\Traits\Attributes\Translate;
use Esayers\Html\Traits\Attributes\Accept;
use Esayers\Html\Traits\Attributes\AccesskeyAttribute;
use Esayers\Html\Traits\Attributes\Action;
use Esayers\Html\Traits\Attributes\Align;
use Esayers\Html\Traits\Attributes\Alt;
use Esayers\Html\Traits\Attributes\Async;
use Esayers\Html\Traits\Attributes\Autocomplete;
use Esayers\Html\Traits\Attributes\Autofocus;
use Esayers\Html\Traits\Attributes\Autoplay;
use Esayers\Html\Traits\Attributes\Bgcolor;
use Esayers\Html\Traits\Attributes\Border;
use Esayers\Html\Traits\Attributes\Charset;
use Esayers\Html\Traits\Attributes\Checked;
use Esayers\Html\Traits\Attributes\Cite;
use Esayers\Html\Traits\Attributes\Color;
use Esayers\Html\Traits\Attributes\Cols;
use Esayers\Html\Traits\Attributes\Colspan;
use Esayers\Html\Traits\Attributes\Content;
use Esayers\Html\Traits\Attributes\Controls;
use Esayers\Html\Traits\Attributes\Coords;
use Esayers\Html\Traits\Attributes\Datetime;
use Esayers\Html\Traits\Attributes\DefaultAttribute;
use Esayers\Html\Traits\Attributes\Defer;
use Esayers\Html\Traits\Attributes\Dirname;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Download;
use Esayers\Html\Traits\Attributes\Enctype;
use Esayers\Html\Traits\Attributes\ForAttribute;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Formaction;
use Esayers\Html\Traits\Attributes\Headers;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\High;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Hreflang;
use Esayers\Html\Traits\Attributes\Ismap;
use Esayers\Html\Traits\Attributes\Kind;
use Esayers\Html\Traits\Attributes\Label;
use Esayers\Html\Traits\Attributes\ListAttribute;
use Esayers\Html\Traits\Attributes\Loop;
use Esayers\Html\Traits\Attributes\Low;
use Esayers\Html\Traits\Attributes\Max;
use Esayers\Html\Traits\Attributes\Maxlength;
use Esayers\Html\Traits\Attributes\Media;
use Esayers\Html\Traits\Attributes\Method;
use Esayers\Html\Traits\Attributes\Min;
use Esayers\Html\Traits\Attributes\Multiple;
use Esayers\Html\Traits\Attributes\Muted;
use Esayers\Html\Traits\Attributes\Name;
use Esayers\Html\Traits\Attributes\Novalidate;
use Esayers\Html\Traits\Attributes\Open;
use Esayers\Html\Traits\Attributes\Optimum;
use Esayers\Html\Traits\Attributes\Pattern;
use Esayers\Html\Traits\Attributes\Placeholder;
use Esayers\Html\Traits\Attributes\Popovertarget;
use Esayers\Html\Traits\Attributes\Popovertargetaction;
use Esayers\Html\Traits\Attributes\Poster;
use Esayers\Html\Traits\Attributes\Preload;
use Esayers\Html\Traits\Attributes\ReadonlyAttribute;
use Esayers\Html\Traits\Attributes\Rel;
use Esayers\Html\Traits\Attributes\Required;
use Esayers\Html\Traits\Attributes\Reversed;
use Esayers\Html\Traits\Attributes\Rows;
use Esayers\Html\Traits\Attributes\Rowspan;
use Esayers\Html\Traits\Attributes\Sandbox;
use Esayers\Html\Traits\Attributes\Scope;
use Esayers\Html\Traits\Attributes\Selected;
use Esayers\Html\Traits\Attributes\Shape;
use Esayers\Html\Traits\Attributes\Size;
use Esayers\Html\Traits\Attributes\Sizes;
use Esayers\Html\Traits\Attributes\Span;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srcdoc;
use Esayers\Html\Traits\Attributes\Srclang;
use Esayers\Html\Traits\Attributes\Srcset;
use Esayers\Html\Traits\Attributes\Start;
use Esayers\Html\Traits\Attributes\Step;
use Esayers\Html\Traits\Attributes\Target;
use Esayers\Html\Traits\Attributes\Type;
use Esayers\Html\Traits\Attributes\Usemap;
use Esayers\Html\Traits\Attributes\Value;
use Esayers\Html\Traits\Attributes\Width;
use Esayers\Html\Traits\Attributes\Wrap;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @todo data-* attribute tests
 * @todo http-equiv attribute tests
 * @todo accept-charset attribute tests
 */
#[CoversClass('GlobalAttribute')]
class AttributeTest extends TestCase
{
    private $testClass;

    public function setUp(): void
    {
        $this->testClass = new class {
            use GlobalAttribute;
            use Accesskey;
            use ClassAttribute;
            use Contenteditable;
            use Dir;
            use Draggable;
            use Enterkeyhint;
            use Hidden;
            use Id;
            use Inert;
            use Inputmode;
            use Lang;
            use Popover;
            use Spellcheck;
            use Style;
            use Tabindex;
            use Title;
            use Translate;
            use Accept;
            use Accesskey;
            use Action;
            use Align;
            use Alt;
            use Async;
            use Autocomplete;
            use Autofocus;
            use Autoplay;
            use Bgcolor;
            use Border;
            use Charset;
            use Checked;
            use Cite;
            use ClassAttribute;
            use Color;
            use Cols;
            use Colspan;
            use Content;
            use Contenteditable;
            use Controls;
            use Coords;
            use Datetime;
            use DefaultAttribute;
            use Defer;
            use Dir;
            use Dirname;
            use Disabled;
            use Download;
            use Draggable;
            use Enctype;
            use Enterkeyhint;
            use ForAttribute;
            use Form;
            use Formaction;
            use Headers;
            use Height;
            use Hidden;
            use High;
            use Href;
            use Hreflang;
            use Id;
            use Inert;
            use Inputmode;
            use Ismap;
            use Kind;
            use Label;
            use Lang;
            use ListAttribute;
            use Loop;
            use Low;
            use Max;
            use Maxlength;
            use Media;
            use Method;
            use Min;
            use Multiple;
            use Muted;
            use Name;
            use Novalidate;
            use Open;
            use Optimum;
            use Pattern;
            use Placeholder;
            use Popover;
            use Popovertarget;
            use Popovertargetaction;
            use Poster;
            use Preload;
            use ReadonlyAttribute;
            use Rel;
            use Required;
            use Reversed;
            use Rows;
            use Rowspan;
            use Sandbox;
            use Scope;
            use Selected;
            use Shape;
            use Size;
            use Sizes;
            use Span;
            use Spellcheck;
            use Src;
            use Srcdoc;
            use Srclang;
            use Srcset;
            use Start;
            use Step;
            use Style;
            use Tabindex;
            use Target;
            use Title;
            use Translate;
            use Type;
            use Usemap;
            use Value;
            use Width;
            use Wrap;
        };
    }

    #[Test]
    public function testConstructAndGet()
    {
        $this->assertEquals([], $this->testClass->getAttributes());
    }

    #[DataProvider('dataSetAttribute')]
    public function testSetAttribute(array $expected, string $name, string|array|bool $value)
    {
        $this->testClass->setAttribute($name, $value);
        $this->assertEquals($expected, $this->testClass->getAttributes());
    }

    public static function dataSetAttribute(): array
    {
        return
        [
            [
                ['id' => '2'],
                'id',
                '2'
            ]
        ];
    }

    #[DataProvider('dataSimpleAliasSetMethods')]
    public function testSimpleAliasSetMethods(string $name, string|array|bool $value)
    {
        $this->testClass->$name($value);
        $this->assertEquals([$name => $value], $this->testClass->getAttributes());
    }

    public static function dataSimpleAliasSetMethods(): array
    {
        return
            [
                ['accesskey', 'tab'],
                ['class', ['class1', 'class2']],
                ['contenteditable', 'true'],
                ['dir', 'ltr'],
                ['draggable', 'true'],
                ['enterkeyhint', '123'],
                ['hidden', true],
                ['id', '2'],
                ['inert', true],
                ['inputmode', 'numeric'],
                ['lang', 'en-us'],
                ['popover', true],
                ['spellcheck', 'true'],
                ['style', '123'],
                ['tabindex', '2'],
                ['title', 'title string'],
                ['translate', 'no'],
                ['accept', '123'],
                ['accesskey', '123'],
                ['action', '123'],
                ['align', '123'],
                ['alt', '123'],
                ['async', '123'],
                ['autocomplete', '123'],
                ['autofocus', '123'],
                ['autoplay', '123'],
                ['bgcolor', '123'],
                ['border', '123'],
                ['charset', '123'],
                ['checked', '123'],
                ['cite', '123'],
                ['class', '123'],
                ['color', '123'],
                ['cols', '123'],
                ['colspan', '123'],
                ['content', '123'],
                ['contenteditable', '123'],
                ['controls', '123'],
                ['coords', '123'],
                ['datetime', '123'],
                ['default', '123'],
                ['defer', '123'],
                ['dir', '123'],
                ['dirname', '123'],
                ['disabled', '123'],
                ['download', '123'],
                ['draggable', '123'],
                ['enctype', '123'],
                ['enterkeyhint', '123'],
                ['for', '123'],
                ['form', '123'],
                ['formaction', '123'],
                ['headers', '123'],
                ['height', '123'],
                ['hidden', '123'],
                ['high', '123'],
                ['href', '123'],
                ['hreflang', '123'],
                ['id', '123'],
                ['inert', '123'],
                ['inputmode', '123'],
                ['ismap', '123'],
                ['kind', '123'],
                ['label', '123'],
                ['lang', '123'],
                ['list', '123'],
                ['loop', '123'],
                ['low', '123'],
                ['max', '123'],
                ['maxlength', '123'],
                ['media', '123'],
                ['method', '123'],
                ['min', '123'],
                ['multiple', '123'],
                ['muted', '123'],
                ['name', '123'],
                ['novalidate', '123'],
                ['open', '123'],
                ['optimum', '123'],
                ['pattern', '123'],
                ['placeholder', '123'],
                ['popover', '123'],
                ['popovertarget', '123'],
                ['popovertargetaction', '123'],
                ['poster', '123'],
                ['preload', '123'],
                ['readonly', '123'],
                ['rel', '123'],
                ['required', '123'],
                ['reversed', '123'],
                ['rows', '123'],
                ['rowspan', '123'],
                ['sandbox', '123'],
                ['scope', '123'],
                ['selected', '123'],
                ['shape', '123'],
                ['size', '123'],
                ['sizes', '123'],
                ['span', '123'],
                ['spellcheck', '123'],
                ['src', '123'],
                ['srcdoc', '123'],
                ['srclang', '123'],
                ['srcset', '123'],
                ['start', '123'],
                ['step', '123'],
                ['style', '123'],
                ['tabindex', '123'],
                ['target', '123'],
                ['title', '123'],
                ['translate', '123'],
                ['type', '123'],
                ['usemap', '123'],
                ['value', '123'],
                ['width', '123'],
                ['wrap', '123']
            ];
    }
}
