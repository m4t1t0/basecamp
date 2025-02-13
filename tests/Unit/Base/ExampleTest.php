<?php

declare(strict_types=1);

namespace App\Tests\Unit\Base;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public static function providerDescription(): iterable
    {
        yield 'one' => ['One'];
    }

    /**
     * @test
     * @dataProvider providerDescription
     **/
    public function test_from_string(string $value): void
    {
        $this->assertSame($value, 'One');
    }
}
