<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

declare(strict_types=1);

namespace PH7\Generator;

class Passcode
{
    public const DEFAULT_LENGTH = 6;

    public static function generate(int $length = self::DEFAULT_LENGTH): string
    {
        $code = [];
        $digits = range(0, 9);

        for ($amount = 0; $amount < $length; $amount++) {
            $code[] = $digits[mt_rand(0, 8)];
        }

        return implode($code);
    }
}
