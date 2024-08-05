<?php

namespace Esayers\Tests\Tags;

use Esayers\Html\Tags\Tag;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('Tag')]
class TagTest extends TestCase
{
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
    public function testChildren()
    {
        $tag = new Tag('div');

        $this->assertEquals([], $tag->getChildren());
    }

    #[Test]
    public function testChildrenInConstructor()
    {
        $child = new Tag('p');
        $tag = new Tag('div', [$child]);

        $this->assertEquals([$child], $tag->getChildren());
    }

    #[Test]
    public function testAddChild()
    {
        $child1 = new Tag('p');
        $child2 = new Tag('p');
        $tag = new Tag('div');
        $tag->child($child1);
        $tag->child($child2);

        $this->assertEquals([$child1, $child2], $tag->getChildren());
    }

    #[Test]
    public function testAddChildren()
    {
        $child1 = new Tag('p');
        $child2 = new Tag('p');
        $tag = new Tag('div');
        $tag->children([$child1, $child2]);

        $this->assertEquals([$child1, $child2], $tag->getChildren());
    }
}
