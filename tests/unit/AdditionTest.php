<?php

declare(strict_types=1);

namespace Archict\BrickTemplate;

use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{
    public function testItAddsNumber(): void
    {
        self::assertSame(11, (new Addition(5, 6))->getResult());
    }
}
