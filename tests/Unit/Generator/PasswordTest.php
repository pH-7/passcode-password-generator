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
        $password = Password::generate($iLength);

        $this->assertSame($iLength, strlen($password));
    }

    public function testPasswordWithDefaultLength(): void
    {
        $password = Password::generate();

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($password));
    }

    public function testPasswordIsString(): void
    {
        $password = Password::generate();

        $this->assertIsString($password);
    }

    public function testPasswordWithSpecialCharacters(): void
    {
        $password = Password::generate(Password::DEFAULT_LENGTH, true);

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($password));
        $this->assertTrue($this->doesContainSpecialChars($password));
    }

    public function testPasswordWithoutSpecialCharacters(): void
    {
        $password = Password::generate(Password::DEFAULT_LENGTH, false);

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($password));
        $this->assertFalse($this->doesContainSpecialChars($password));
    }

    private function doesContainSpecialChars(string $password): bool
    {
        $specialChars = ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'];

        foreach (str_split($password) as $char) {
            if (in_array($char, $specialChars, true)) {
                return true;
            }
        }
        return false;
    }
}
