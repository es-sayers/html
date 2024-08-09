<?php

namespace Esayers\Html\Tests;

use Esayers\Html\Text;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass('Text')]
class TextTest extends TestCase
{
    #[Test]
    public function testRender()
    {
        $text = new Text("TestText");
        $this->assertEquals("TestText", $text->render());
    }

    #[Test]
    public function testRenderEncodesHTMLcharacters()
    {
        $text = new Text("<");
        $this->assertEquals("&lt;", $text->render());
    }

    #[Test]
    public function testToString()
    {
        $text = new Text("TestText");
        $this->assertEquals("TestText", $text->__toString());
    }
}
