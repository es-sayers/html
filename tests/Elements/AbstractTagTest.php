<?php

namespace Esayers\Html\Tests\Elements;

use Esayers\Html\Elements\AbstractTag;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass('AbstractTag')]
class AbstractTagTest extends TestCase
{
    protected $stub;

    public function setUp(): void
    {
        $this->stub = $this->getMockBuilder(AbstractTag::class)
                           ->setConstructorArgs(['div', ['id' => '2']])
                           ->getMock();
    }

    #[Test]
    public function testConstructAndGetName()
    {
        $this->assertEquals('div', $this->stub->getName());
    }

    #[Test]
    public function testConstructAndGetAttributes()
    {
        $this->assertEquals(['id' => '2'], $this->stub->getAttributes());
    }

    #[Test]
    public function testAddAttribute()
    {
        $this->stub->attribute('title', 'test');
        $this->assertEquals(['id' => '2', 'title' => 'test'], $this->stub->getAttributes());
    }

    #[Test]
    public function testOverrideAttribute()
    {
        $this->stub->attribute('id', '3');
        $this->assertEquals(['id' => '3'], $this->stub->getAttributes());
    }

    #[Test]
    public function testAddAttributes()
    {
        $this->stub->attributes(['title' => 'test', 'tabindex' => '3']);
        $this->assertEquals(['id' => '2', 'title' => 'test', 'tabindex' => '3'], $this->stub->getAttributes());
    }
}
