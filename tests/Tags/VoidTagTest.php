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
}
