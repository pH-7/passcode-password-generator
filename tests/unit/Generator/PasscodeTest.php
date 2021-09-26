<?php

declare(strict_types=1);

namespace PH7\Generator\Test\Unit;

use PH7\Generator\Passcode;
use PHPUnit\Framework\TestCase;

final class PasscodeTest extends TestCase
{
    public function testPasscodeLength(): void
    {
        $length = 8;
        $passcode = Passcode::generate($length);

        $this->assertSame($length, strlen($passcode));
    }

    public function testPasscodeIsString(): void
    {
        $passcode = Passcode::generate();

        $this->assertTrue(is_string($passcode));
    }
}
