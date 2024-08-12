<?php

namespace Esayers\Html\Tests;

use Esayers\Html\Elements\Tag;
use Esayers\Html\Html;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('Html')]
class HtmlTest extends TestCase
{
    #[Test]
    public function testText() {
        $text = Html::text('text>');
        $this->assertEquals('text&gt;', $text->render());
    }

    #[DataProvider('dataVoidTagNames')]
    #[DataProvider('dataTagNames')]
    public function testCreateOptionalParameters(string $tagName) {
        $tag = Html::$tagName();
        $this->assertEquals($tagName, $tag->getName());
    }

    #[DataProvider('dataTagNames')]
    public function testCreateTagWithStringChild(string $tagName) {
        $tag = Html::$tagName('text>');
        $children = $tag->getChildren();
        $this->assertEquals('text&gt;', $children[0]->render());
    }

    #[DataProvider('dataTagNames')]
    public function testCreateTagWithRenderableChild(string $tagName) {
        $child = new Tag('p');
        $tag = Html::$tagName($child);
        $this->assertEquals([$child], $tag->getChildren());
    }


    #[DataProvider('dataVoidTagNames')]
    public function testCreateVoidTag(string $tagName)
    {
        $attributes = ['id' => '1'];
        $tag = Html::$tagName($attributes);
        $this->assertEquals($tagName, $tag->getName());
        $this->assertEquals($attributes, $tag->getAttributes());
    }


    #[DataProvider('dataTagNames')]
    public function testCreateTag(string $tagName)
    {
        $children = [new Tag('p')];
        $attributes = ['id' => '1'];
        $tag = Html::$tagName($children, $attributes);
        $this->assertEquals($tagName, $tag->getName());
        $this->assertEquals($attributes, $tag->getAttributes());
        $this->assertEquals($children, $tag->getChildren());
    }

    public static function dataVoidTagNames():array {
        return 
        [
            ['area'],
            ['base'],
            ['br'],
            ['col'],
            ['embed'],
            ['hr'],
            ['img'],
            ['input'],
            ['link'],
            ['meta'],
            ['param'],
            ['source'],
            ['track'],
            ['wbr']
        ];
    }

    public static function dataTagNames():array {
        return 
        [
            ['a'],
            ['abbr'],
            ['address'],
            ['article'],
            ['aside'],
            ['audio'],
            ['b'],
            ['bdi'],
            ['bdo'],
            ['blockquote'],
            ['body'],
            ['button'],
            ['canvas'],
            ['caption'],
            ['cite'],
            ['code'],
            ['colgroup'],
            ['data'],
            ['datalist'],
            ['dd'],
            ['del'],
            ['details'],
            ['dfn'],
            ['dialog'],
            ['div'],
            ['dl'],
            ['dt'],
            ['em'],
            ['fieldset'],
            ['figcaption'],
            ['figure'],
            ['footer'],
            ['form'],
            ['h1'],
            ['h2'],
            ['h3'],
            ['h4'],
            ['h5'],
            ['h6'],
            ['head'],
            ['header'],
            ['hgroup'],
            ['html'],
            ['i'],
            ['iframe'],
            ['ins'],
            ['kbd'],
            ['label'],
            ['legend'],
            ['li'],
            ['main'],
            ['map'],
            ['mark'],
            ['menu'],
            ['meter'],
            ['nav'],
            ['noscript'],
            ['ol'],
            ['optgroup'],
            ['option'],
            ['output'],
            ['object'],
            ['p'],
            ['picture'],
            ['pre'],
            ['progress'],
            ['q'],
            ['rp'],
            ['rt'],
            ['ruby'],
            ['s'],
            ['samp'],
            ['script'],
            ['search'],
            ['section'],
            ['select'],
            ['small'],
            ['span'],
            ['strike'],
            ['strong'],
            ['style'],
            ['sub'],
            ['summary'],
            ['sup'],
            ['svg'],
            ['table'],
            ['tbody'],
            ['td'],
            ['template'],
            ['textarea'],
            ['tfoot'],
            ['th'],
            ['thead'],
            ['time'],
            ['title'],
            ['tr'],
            ['u'],
            ['ul'],
            ['var'],
            ['video'],
        ];
    }
}
