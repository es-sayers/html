<?php

namespace Esayers\Html\Tests;

use Esayers\Html\Collection;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use stdClass;

#[CoversClass('Collection')]
class CollectionTest extends TestCase
{
    private Collection $collection;
    private array $defaultCollection = [1, 2, 3, 4];

    public function setUp(): void
    {
        $this->collection = new Collection($this->defaultCollection);
    }

    #[Test]
    public function testConstructAndGet()
    {
        $this->assertEquals($this->defaultCollection, $this->collection->getCollection());
    }

    #[Test]
    public function testAt()
    {
        $this->assertEquals(2, $this->collection->at(1));
    }

    #[Test]
    public function testConstructRemovesArrayKeys()
    {
        $obj = new Collection(['first' => 1, 'second' => 2]);
        $this->assertEquals([1, 2], $obj->getCollection());
    }

    #[Test]
    public function testSetCollection()
    {
        $obj = new Collection([3, 4]);
        $obj->setCollection([1, 2]);
        $this->assertEquals([1, 2], $obj->getCollection());
    }

    #[Test]
    public function testSetCollectionRemovesArrayKeys()
    {
        $obj = new Collection([3, 4]);
        $obj->setCollection(['first' => 1, 'second' => 2]);
        $this->assertEquals([1, 2], $obj->getCollection());
    }


    /**
     *
     *      Array element removal tests
     *
     */
    #[Test]
    public function testRemoveAt()
    {
        $this->collection->removeAt(1);
        $this->assertEquals(
            [1, 3, 4],
            $this->collection->getCollection()
        );
    }

    #[Test]
    public function testRemoveAll()
    {
        $this->collection->removeAll();
        $this->assertEquals(
            [],
            $this->collection->getCollection()
        );
    }

    #[Test]
    public function testRemoveFirst()
    {
        $this->collection->removeFirst();
        $this->assertEquals(
            [2, 3, 4],
            $this->collection->getCollection()
        );
    }

    #[Test]
    public function testRemoveLast()
    {
        $this->collection->removeLast();
        $this->assertEquals(
            [1, 2, 3],
            $this->collection->getCollection()
        );
    }

    /**
     *
     *      Single element single insertion tests
     *
     */

    #[DataProvider('valuesProvider')]
    public function testInsertAt(mixed $value)
    {
        $this->collection->insertAt($value, 1);
        $this->assertEquals(
            [1, $value, 2, 3, 4],
            $this->collection->getCollection()
        );
    }


    #[DataProvider('valuesProvider')]
    public function testInsertFirst(mixed $value)
    {
        $this->collection->insertFirst($value);
        $this->assertEquals(
            [$value, 1, 2, 3, 4],
            $this->collection->getCollection()
        );
    }

    #[DataProvider('valuesProvider')]
    public function testPrependAlias(mixed $value)
    {
        $this->collection->prepend($value);
        $this->assertEquals(
            [$value, 1, 2, 3, 4],
            $this->collection->getCollection()
        );
    }

    #[DataProvider('valuesProvider')]
    public function testInsertLast(mixed $value)
    {
        $this->collection->insertLast($value);
        $this->assertEquals(
            [1, 2, 3, 4, $value],
            $this->collection->getCollection()
        );
    }

    #[DataProvider('valuesProvider')]
    public function testAppendAlias(mixed $value)
    {
        $this->collection->append($value);
        $this->assertEquals(
            [1, 2, 3, 4, $value],
            $this->collection->getCollection()
        );
    }

    /**
     *
     *      Array element insertion tests
     *
     */

     #[DataProvider('arrayValuesProvider')]
    public function testInsertAllAt(array $value)
    {
        $expected = array_values($value);
        $this->collection->insertAllAt($value, 1);
        $this->assertEquals(
            [1, $expected[0], $expected[1], 2, 3, 4],
            $this->collection->getCollection()
        );
    }


     #[DataProvider('arrayValuesProvider')]
    public function testInsertAllFirst(array $value)
    {
        $expected = array_values($value);
        $this->collection->insertAllFirst($value);
        $this->assertEquals(
            [$expected[0], $expected[1], 1, 2, 3, 4],
            $this->collection->getCollection()
        );
    }

     #[DataProvider('arrayValuesProvider')]
    public function testPrependAllAlias(array $value)
    {
        $expected = array_values($value);
        $this->collection->prependAll($value);
        $this->assertEquals(
            [$expected[0], $expected[1], 1, 2, 3, 4],
            $this->collection->getCollection()
        );
    }

     #[DataProvider('arrayValuesProvider')]
    public function testInsertAllLast(array $value)
    {
        $expected = array_values($value);
        $this->collection->insertAllLast($value);
        $this->assertEquals(
            [1, 2, 3, 4, $expected[0], $expected[1]],
            $this->collection->getCollection()
        );
    }

     #[DataProvider('arrayValuesProvider')]
    public function testAppendAllAlias(array $value)
    {
        $expected = array_values($value);
        $this->collection->appendAll($value);
        $this->assertEquals(
            [1, 2, 3, 4, $expected[0], $expected[1]],
            $this->collection->getCollection()
        );
    }

    public static function arrayValuesProvider()
    {
        # Use arrays with 2 elements
        return
        [
            'simple array' => [[8, 9]],
            'object array' => [[new stdClass(), new stdClass()]],
            'multi-dim array' => [[[6, 7], [8, 9]]],
            'associative array' => [['first' => 1, 'second' => 2]]
        ];
    }

    /**
     *
     *      Single element replace tests
     *
     */

    #[DataProvider('valuesProvider')]
    public function testReplaceAt(mixed $value)
    {
        $this->collection->replaceAt($value, 1);
        $this->assertEquals(
            [1, $value, 3, 4],
            $this->collection->getCollection()
        );
    }

    #[DataProvider('valuesProvider')]
    public function testReplaceFirst(mixed $value)
    {
        $this->collection->replaceFirst($value);
        $this->assertEquals(
            [$value, 2, 3, 4],
            $this->collection->getCollection()
        );
    }

    #[DataProvider('valuesProvider')]
    public function testReplaceLast(mixed $value)
    {
        $this->collection->replaceLast($value);
        $this->assertEquals(
            [1, 2, 3, $value],
            $this->collection->getCollection()
        );
    }

    public static function valuesProvider()
    {
        return
        [
            'non-array' => [9],
            'array' => [[9]],
            'object' => [new stdClass()],
            'multi-dim array' => [[[1, 2], [3, 4]]],
            'associative array' => [['first' => 1, 'second' => 2]]
        ];
    }
}
