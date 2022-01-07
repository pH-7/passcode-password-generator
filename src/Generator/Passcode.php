<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021-2022, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Generator;

class Passcode
{
    public const DEFAULT_LENGTH = 6;

    private const DIGITS = '1234567890';
    private const TOTAL_DIGITS = 9;

    public static function generate(int $length = self::DEFAULT_LENGTH): string
    {
        $code = [];
        for ($amount = 0; $amount < $length; $amount++) {
            $code[] = self::DIGITS[mt_rand(0, self::TOTAL_DIGITS)];
        }

        return implode($code);
    }
}
