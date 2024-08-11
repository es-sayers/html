<?php

namespace Esayers\Html\Tests\Traits\Attributes;

use Esayers\Html\Traits\Attributes\GlobalAttribute;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @todo data-* attribute tests
 */
#[CoversClass('GlobalAttribute')]
class GlobalAttributeTest extends TestCase
{
    private $testClass;

    public function setUp(): void
    {
        $this->testClass = new class {
            use GlobalAttribute;
        };
    }

    #[Test]
    public function testConstructAndGet()
    {
        $this->assertEquals([], $this->testClass->getAttributes());
    }

    #[DataProvider('dataSetAttribute')]
    public function testSetAttribute(array $expected, string $name, string|array|bool $value)
    {
        $this->testClass->setAttribute($name, $value);
        $this->assertEquals($expected, $this->testClass->getAttributes());
    }

    public static function dataSetAttribute(): array
    {
        return
        [
            [
                ['id' => '2'],
                'id',
                '2'
            ]
        ];
    }

    #[DataProvider('dataSimpleAliasSetMethods')]
    public function testSimpleAliasSetMethods(string $name, string|array|bool $value)
    {
        $this->testClass->$name($value);
        $this->assertEquals([$name => $value], $this->testClass->getAttributes());
    }

    public static function dataSimpleAliasSetMethods(): array
    {
        return
            [
                ['accesskey', 'tab'],
                ['class', ['class1', 'class2']],
                ['contenteditable', 'true'],
                ['dir', 'ltr'],
                ['draggable', 'true'],
                ['enterkeyhint', '123'],
                ['hidden', true],
                ['id', '2'],
                ['inert', true],
                ['inputmode', 'numeric'],
                ['lang', 'en-us'],
                ['popover', true],
                ['spellcheck', 'true'],
                ['style', '123'],
                ['tabindex', '2'],
                ['title', 'title string'],
                ['translate', 'no'],
            ];
    }
}
