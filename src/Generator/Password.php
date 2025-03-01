<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021-2023, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Generator;

class Password
{
    public const DEFAULT_LENGTH = 12;

    private const SPECIAL_CHARACTERS = ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'];

    public static function generate(int $length = self::DEFAULT_LENGTH, bool $specialCharacters = true): string
    {
        $password = '';
        $keys = array_merge(
            range(0, 9),
            range('a', 'z'),
            range('A', 'Z'),
            $specialCharacters ? self::SPECIAL_CHARACTERS : []
        );
        $endKeysIndex = count($keys) - 1;

        for ($amount = 0; $amount < $length; $amount++) {
            $password .= $keys[random_int(0, $endKeysIndex)];
        }

        return $password;
    }
}
