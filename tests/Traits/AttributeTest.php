<?php

namespace Esayers\Html\Tests\Traits;
use Esayers\Html\Elements\Tag;
use Esayers\Html\Traits\Attributes\Ping;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Esayers\Html\Traits\Attributes\Accept;
use Esayers\Html\Traits\Attributes\Accesskey;
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
use Esayers\Html\Traits\Attributes\ClassAttribute;
use Esayers\Html\Traits\Attributes\Color;
use Esayers\Html\Traits\Attributes\Cols;
use Esayers\Html\Traits\Attributes\Colspan;
use Esayers\Html\Traits\Attributes\Content;
use Esayers\Html\Traits\Attributes\Contenteditable;
use Esayers\Html\Traits\Attributes\Controls;
use Esayers\Html\Traits\Attributes\Coords;
use Esayers\Html\Traits\Attributes\Data;
use Esayers\Html\Traits\Attributes\Datetime;
use Esayers\Html\Traits\Attributes\DefaultAttribute;
use Esayers\Html\Traits\Attributes\Defer;
use Esayers\Html\Traits\Attributes\Dir;
use Esayers\Html\Traits\Attributes\Dirname;
use Esayers\Html\Traits\Attributes\Disabled;
use Esayers\Html\Traits\Attributes\Download;
use Esayers\Html\Traits\Attributes\Draggable;
use Esayers\Html\Traits\Attributes\Enctype;
use Esayers\Html\Traits\Attributes\Enterkeyhint;
use Esayers\Html\Traits\Attributes\ForAttribute;
use Esayers\Html\Traits\Attributes\Form;
use Esayers\Html\Traits\Attributes\Formaction;
use Esayers\Html\Traits\Attributes\Headers;
use Esayers\Html\Traits\Attributes\Height;
use Esayers\Html\Traits\Attributes\Hidden;
use Esayers\Html\Traits\Attributes\High;
use Esayers\Html\Traits\Attributes\Href;
use Esayers\Html\Traits\Attributes\Hreflang;
use Esayers\Html\Traits\Attributes\Httpequiv;
use Esayers\Html\Traits\Attributes\Id;
use Esayers\Html\Traits\Attributes\Inert;
use Esayers\Html\Traits\Attributes\Inputmode;
use Esayers\Html\Traits\Attributes\Ismap;
use Esayers\Html\Traits\Attributes\Kind;
use Esayers\Html\Traits\Attributes\Label;
use Esayers\Html\Traits\Attributes\Lang;
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
use Esayers\Html\Traits\Attributes\Popover;
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
use Esayers\Html\Traits\Attributes\Spellcheck;
use Esayers\Html\Traits\Attributes\Src;
use Esayers\Html\Traits\Attributes\Srcdoc;
use Esayers\Html\Traits\Attributes\Srclang;
use Esayers\Html\Traits\Attributes\Srcset;
use Esayers\Html\Traits\Attributes\Start;
use Esayers\Html\Traits\Attributes\Step;
use Esayers\Html\Traits\Attributes\Style;
use Esayers\Html\Traits\Attributes\Tabindex;
use Esayers\Html\Traits\Attributes\Target;
use Esayers\Html\Traits\Attributes\Title;
use Esayers\Html\Traits\Attributes\Translate;
use Esayers\Html\Traits\Attributes\Type;
use Esayers\Html\Traits\Attributes\Usemap;
use Esayers\Html\Traits\Attributes\Value;
use Esayers\Html\Traits\Attributes\Width;
use Esayers\Html\Traits\Attributes\Wrap;
use PHPUnit\Framework\Attributes\Test;
use ValueError;

class AttributeTest extends TestCase {

    private $tag;

    public function setUp(): void {
        $this->tag = new class('div') extends Tag { 
            public function renderString(): string
            {
                return '';
            }

            /**
             * Provides access to renderAttributes()
             * @return string
             */
            public function renderAttributeTest() : string {
                return $this->renderAttributes();
            }
            # use GlobalAttribute; inferred from Tag
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
            use Data;
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
            use Httpequiv;
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
            use Ping;
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

    #[DataProvider('dataRenderAttributes')]
    public function testRenderAttributes(string $expected, array $attributes) {
        foreach ($attributes as $name => $value) {
            $this->tag->setAttribute($name, $value);
        } 
        $this->assertEquals($expected, $this->tag->renderAttributeTest());
    }

    public static function dataRenderAttributes() : array {
        return
            [
                'empty' => [
                    '',
                    []
                ],
                'encode value' => [
                    ' name="&gt;"',
                    ['name' => '>']
                ],
                'bool true' => [
                    ' disabled',
                    ['disabled' => true]
                ],
                'bool false' => [
                    '',
                    ['disabled' => false]
                ],
                'simple' => [
                    ' id="2"',
                    ['id' => '2']
                ],
                'multiple' => [
                    ' id="2" name="test"',
                    ['id' => '2', 'name' => 'test']
                ],
                'attribute list as single' => [
                    ' class="test"',
                    ['class' => 'test']
                ],
                'multiple class' => [
                    ' class="test test2"',
                    ['class' => ['test', 'test2']]
                ],
                'multiple accept' => [
                    ' accept="image/png,image/jpeg"',
                    ['accept' => ['image/png', 'image/jpeg']]
                ],
                'multiple accept-charset' => [
                    ' accept-charset="utf-8 ISO-8859-1"',
                    ['accept-charset' => ['utf-8', 'ISO-8859-1']]
                ],
                'multiple ping' => [
                    ' ping="123.123.123.123 321.321.321.321"',
                    ['ping' => ['123.123.123.123', '321.321.321.321']]
                ],
                'encode attribute list' => [
                    ' class="test&gt; test1&gt; test2&gt;"',
                    ['class' => ['test>', 'test1>', 'test2>']]
                ]
            ];
    }

    #[DataProvider('dataNameThrowsValueError')]
    public function testNameThrowsValueError(string $name) {
        $this->expectException(ValueError::class);
        $this->tag->setAttribute($name, "");
    }

    public static function dataNameThrowsValueError() : array {
        return
        [
            [''],
            [' '],
            ['&'],
            ['"'],
            ["'"],
            ['<'],
            ['/'],
            ['='],
        ];
    }

    #[DataProvider('dataAttributes')]
    public function testAttributeSetterMethods(string $method, string $attribute = '') {
        if($attribute == '') {
            $attribute = $method;
        }
        $this->tag->$method('123');
        $this->assertEquals([$attribute => '123'], $this->tag->getAttributes());
    }

    public static function dataAttributes() : array {
        return
            [
                ['accept'],
                ['accesskey'],
                ['action'],
                ['align'],
                ['alt'],
                ['async'],
                ['autocomplete'],
                ['autofocus'],
                ['autoplay'],
                ['bgcolor'],
                ['border'],
                ['charset'],
                ['checked'],
                ['cite'],
                ['class'],
                ['color'],
                ['cols'],
                ['colspan'],
                ['content'],
                ['contenteditable'],
                ['controls'],
                ['coords'],
                ['data'],
                ['datetime'],
                ['default'],
                ['defer'],
                ['dir'],
                ['dirname'],
                ['disabled'],
                ['download'],
                ['draggable'],
                ['enctype'],
                ['enterkeyhint'],
                ['for'],
                ['form'],
                ['formaction'],
                ['headers'],
                ['height'],
                ['hidden'],
                ['high'],
                ['href'],
                ['hreflang'],
                ['httpequiv', 'http-equiv'],
                ['id'],
                ['inert'],
                ['inputmode'],
                ['ismap'],
                ['kind'],
                ['label'],
                ['lang'],
                ['list'],
                ['loop'],
                ['low'],
                ['max'],
                ['maxlength'],
                ['media'],
                ['method'],
                ['min'],
                ['multiple'],
                ['muted'],
                ['name'],
                ['novalidate'],
                ['open'],
                ['optimum'],
                ['pattern'],
                ['placeholder'],
                ['popover'],
                ['popovertarget'],
                ['popovertargetaction'],
                ['poster'],
                ['preload'],
                ['readonly'],
                ['rel'],
                ['required'],
                ['reversed'],
                ['rows'],
                ['rowspan'],
                ['sandbox'],
                ['scope'],
                ['selected'],
                ['shape'],
                ['size'],
                ['sizes'],
                ['span'],
                ['spellcheck'],
                ['src'],
                ['srcdoc'],
                ['srclang'],
                ['srcset'],
                ['start'],
                ['step'],
                ['style'],
                ['tabindex'],
                ['target'],
                ['title'],
                ['translate'],
                ['type'],
                ['usemap'],
                ['value'],
                ['width'],
                ['wrap']
            ];
    }
}