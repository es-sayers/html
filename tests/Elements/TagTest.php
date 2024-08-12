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
        $this->assertEquals([], $tag->getChildren());
    }

    #[Test]
    public function testConstructWithChildren()
    {
        $child = new Tag('p');
        $tag = new Tag('div', [$child]);

        $this->assertEquals([$child], $tag->getChildren());
    }

    #[Test]
    public function testChild() {
        $child = new Tag('p');
        $tag = new Tag('div');
        $tag->child($child);

        $this->assertEquals([$child], $tag->getChildren());
    }

    #[Test]
    public function testChildren() {
        $child1 = new Tag('p');
        $child2 = new Tag('h1');
        $tag = new Tag('div');
        $tag->children([$child1, $child2]);

        $this->assertEquals([$child1, $child2], $tag->getChildren());
    }

    #[Test]
    public function testClearChildren() {
        $child = new Tag('p');
        $tag = new Tag('div');
        $tag->child($child);
        $tag->clearChildren();

        $this->assertEquals([], $tag->getChildren());
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
