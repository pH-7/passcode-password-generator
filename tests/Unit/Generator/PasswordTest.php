<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Generator\Test\Unit;

use PH7\Generator\Password;
use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
    public function testPasswordWithSpecifiedLength(): void
    {
        $iLength = 8;
        $sPassword = Password::generate($iLength);

        $this->assertSame($iLength, strlen($sPassword));
    }

    public function testPasswordWithDefaultLength(): void
    {
        $sPassword = Password::generate();

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($sPassword));
    }

    public function testPasswordIsString(): void
    {
        $sPassword = Password::generate();

        $this->assertTrue(is_string($sPassword));
    }

    public function testPasswordWithSpecialCharacters(): void
    {
        $sPassword = Password::generate(Password::DEFAULT_LENGTH, true);

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($sPassword));
        $this->assertTrue(
            in_array(
                $sPassword,
                ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'],
                true
            )
        );
    }

    public function testPasswordWithoutSpecialCharacters(): void
    {
        $sPassword = Password::generate(Password::DEFAULT_LENGTH, false);

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($sPassword));
        $this->assertFalse(
            in_array(
                $sPassword,
                ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'],
                true
            )
        );
    }
}
