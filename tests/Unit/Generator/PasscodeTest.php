<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021-2022, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Tests\Unit\Generator;

use PH7\Generator\Passcode;
use PHPUnit\Framework\TestCase;

final class PasscodeTest extends TestCase
{
    public function testPasscodeWithSpecificLength(): void
    {
        $length = 10;
        $passcode = Passcode::generate($length);

        $this->assertSame($length, strlen($passcode));
    }

    public function testPasscodeWithDefaultLength(): void
    {
        $passcode = Passcode::generate();

        $this->assertSame(Passcode::DEFAULT_LENGTH, strlen($passcode));
    }

    public function testPasscodeIsString(): void
    {
        $passcode = Passcode::generate();

        $this->assertTrue(ctype_digit($passcode));
    }
}
