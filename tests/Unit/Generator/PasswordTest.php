<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021-2022, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Tests\Unit\Generator;

use PH7\Generator\Password;
use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
    public function testPasswordWithSpecificLength(): void
    {
        $length = 8;
        $password = Password::generate($length);

        $this->assertSame($length, strlen($password));
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

    /**
     * Check if the given password contains any special characters.
     *
     * @return bool TRUE if it does contain special characters.
     */
    private function doesContainSpecialChars(string $password): bool
    {
        $specialCharacters = ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'];

        foreach (str_split($password) as $character) {
            if (in_array($character, $specialCharacters, true)) {
                return true; // exit the loop
            }
        }
        return false;
    }
}
