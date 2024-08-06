<?php

namespace Esayers\Tests;

use Esayers\Html\Attribute;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass('Html')]
class AttributeTest extends TestCase
{
    #[DataProvider('renderAttributesProvider')]
    public function testRenderAttributes(string $expected, array $attributes)
    {
        $attributeStr = Attribute::renderAttributes($attributes);
        $this->assertEquals($expected, $attributeStr);
    }

    /**
     * Provides test attributes for testRenderAttributes
     *
     * @return array
     */
    public static function renderAttributesProvider()
    {
        return
        [
            'empty attributes' => [
                '',
                []
            ],
            'simple attributes' => [
                ' id="2" tabindex="3"',
                ['id' => '2', 'tabindex' => '3']
            ],
            'class array' => [
                ' class="class1 class2"',
                ['class' => ['class1', 'class2']]
            ],
            'Attribute::LIST_ATTRIBUTES by value' => [
                ' class="class1"',
                ['class' => 'class1']
            ],
            'accept' => [
                ' accept="image/png,image/jpeg"',
                ['accept' => ['image/png', 'image/jpeg']]
            ],
            'accept-charset' => [
                ' accept-charset="utf-8 ISO-8859-1"',
                ['accept-charset' => ['utf-8', 'ISO-8859-1']]
            ],
            'ping' => [
                ' ping="123.123.123.123 321.321.321.321"',
                ['ping' => ['123.123.123.123', '321.321.321.321']]
            ]
        ];
    }
}
