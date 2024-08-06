<?php

namespace Esayers\Tests\Tags;

use Esayers\Html\Tags\VoidTag;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('VoidTag')]
class VoidTagTest extends TestCase
{
    #[Test]
    public function testRender()
    {
        $tag = new VoidTag('br');
        $this->assertEquals('<br/>', $tag->render());
    }

    #[Test]
    public function testConstructWithAttributes()
    {
        $attributes = [
            'class' => ['class1', 'class2'],
            'id' => '2'
        ];
        $tag = new VoidTag('br', $attributes);
        $this->assertEquals($attributes, $tag->getAttributes());
    }

    #[Test]
    public function testRenderWithAttributes()
    {
        $tag = new VoidTag('br', ['id' => '2']);
        $this->assertEquals('<br id="2"/>', $tag->render());
    }
}
