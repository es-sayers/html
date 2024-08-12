<?php

namespace Esayers\Html\Tests;

use Esayers\Html\Html;
use Esayers\Html\Elements\VoidTag;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('Html')]
class HtmlTest extends TestCase
{
    #[Test]
    public function testCreateTag()
    {
        $tag = Html::div();
        $this->assertEquals('div', $tag->getName());
    }

    #[Test]
    public function testCreateTagDoesntExist()
    {
        $tag = Html::thisHtmlTagDoesntExist();
        $this->assertEquals(null, $tag);
    }

    #[Test]
    public function testCreateTagWithSingleChild()
    {
        $child = Html::p();
        $tag = Html::div($child);
        $this->assertEquals([$child], $tag->getChildren());
    }

    #[Test]
    public function testCreateTagWithChildrenArray()
    {
        $child1 = Html::p();
        $child2 = Html::span();
        $tag = Html::div([$child1, $child2]);
        $this->assertEquals([$child1, $child2], $tag->getChildren());
    }

    #[Test]
    public function testCreateTagWithAttributes()
    {
        $tag = Html::div([], ['color' => 'red']);
        $this->assertEquals('<div color="red"></div>', $tag->render());
    }

    #[Test]
    public function testCreateVoidTagWithAttributes()
    {
        $tag = Html::br(['color' => 'red']);
        $this->assertEquals('<br color="red"/>', $tag->render());
    }

    #[DataProvider('voidTagProvider')]
    public function testVoidTag($tag)
    {
        $br = Html::$tag();
        $this->assertInstanceOf(VoidTag::class, $br);
    }

    public static function voidTagProvider()
    {
        return [
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
}
