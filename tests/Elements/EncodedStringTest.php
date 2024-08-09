<?php

namespace Esayers\Html\Tests;

use Esayers\Html\Elements\EncodedString;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('EncodedString')]
class EncodedStringTest extends TestCase
{
    #[Test]
    public function testStaticConstructor()
    {
        $text = EncodedString::new("test");
        $this->assertEquals($text, $text->render());
    }

    #[Test]
    public function testStaticFrom()
    {
        $this->assertEquals("test", EncodedString::from("test"));
    }


    #[DataProvider('dataTestRender')]
    public function testRender(string $expected, string $content)
    {
        $text = new EncodedString($content);
        $this->assertEquals($expected, $text->render());
    }

    public static function dataTestRender()
    {
        return
        [
            [
                'abc',
                'abc'
            ],
            [
                '&amp;&lt;&gt;&quot;&#039;',
                '&<>"\''
            ],
            [
                '&amp;amp;&amp;lt;&amp;gt;&amp;quot;&amp;#039;',
                '&amp;&lt;&gt;&quot;&#039;'
            ]
        ];
    }
}
