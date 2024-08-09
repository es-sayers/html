<?php

namespace Esayers\Html\Tests\Elements;

use Esayers\Html\Elements\Tag;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('Tag')]
class TagTest extends TestCase
{
    #[Test]
    public function testConstructAndGet()
    {
        $tag = new Tag('div');
        $this->assertEquals([], $tag->children()->toArray());
    }

    #[Test]
    public function testConstructWithChildren()
    {
        $child = new Tag('p');
        $tag = new Tag('div', [$child]);

        $this->assertEquals([$child], $tag->children()->toArray());
    }

    #[Test]
    public function testConstructWithAttributes()
    {
        $attributes = [
            'class' => ['class1', 'class2'],
            'id' => '2'
        ];
        $tag = new Tag('div', [], $attributes);
        $this->assertEquals($attributes, $tag->getAttributes());
    }

    #[Test]
    public function testRender()
    {
        $tag = new Tag('div');
        $this->assertEquals('<div></div>', $tag->render());
    }

    #[Test]
    public function testRenderWithChildren()
    {
        $tag = new Tag('div', [new Tag('p')]);
        $this->assertEquals('<div><p></p></div>', $tag->render());
    }

    #[Test]
    public function testRenderWithAttributes()
    {
        $tag = new Tag('div', [], ['id' => '2']);

        $this->assertEquals('<div id="2"></div>', $tag->render());
    }
}
