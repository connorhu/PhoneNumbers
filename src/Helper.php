<?php

namespace Connor\PhoneNumbers;

class Helper
{
    public static function cleanup(string $phoneNumber): string
    {
        $phoneNumber = trim($phoneNumber);
        if (strlen($phoneNumber) === 0) {
            return $phoneNumber;
        }

        $prefix = str_starts_with($phoneNumber, '+') ? '+' : '';

        return $prefix . preg_replace('/\D*/', '', $phoneNumber);
    }
}
