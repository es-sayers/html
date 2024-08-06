<?php

namespace Esayers\Tests;

use Esayers\Html\Html;
use Esayers\Html\Text;
use PHPUnit\Framework\Attributes\CoversClass;
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
    public function testText()
    {
        $text = Html::text('Test');
        $this->assertInstanceOf(Text::class, $text);
        $this->assertEquals('Test', $text->render());
    }
}
