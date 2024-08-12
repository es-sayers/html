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
}
