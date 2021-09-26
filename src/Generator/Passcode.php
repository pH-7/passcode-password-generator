<?php

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
