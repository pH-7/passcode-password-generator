<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

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
