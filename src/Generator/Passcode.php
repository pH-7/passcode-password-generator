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
    public const DEFAULT_LENGTH = 12;

    private const ALPHANUMERIC = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

    public static function generate(int $length = self::DEFAULT_LENGTH): string
    {
        $code = [];

        for ($i = 0, $alphaLength = strlen(self::ALPHANUMERIC) - 1; $i < $length; $i++) {
            $code[] = self::ALPHANUMERIC[mt_rand(0, $alphaLength)];
        }

        return implode($code);
    }
}
