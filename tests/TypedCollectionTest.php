<?php

namespace Esayers\Html\Tests;

use Esayers\Html\TypedCollection;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use stdClass;

#[CoversClass('Collection')]
class TypedCollectionTest extends TestCase
{
    #[Test]
    public function testConstructGetType()
    {
        $collection = new TypedCollection(stdClass::class);
        $this->assertEquals(stdClass::class, $collection->type());
    }

    #[Test]
    public function testInsertTypeErrorThrowsInvalidArgumentException()
    {
        $collection = new TypedCollection('string');
        $this->expectException(InvalidArgumentException::class);
        $collection->insertAt(1, 0);
    }

    #[Test]
    public function testReplaceTypeErrorThrowsInvalidArgumentException()
    {
        $collection = new TypedCollection('string', ['a']);
        $this->expectException(InvalidArgumentException::class);
        $collection->replaceAt(1, 0);
    }
}
