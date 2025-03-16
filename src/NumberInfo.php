<?php

namespace Connor\PhoneNumbers;

class NumberInfo
{
    public string $number;

    public bool $internationalAccess;

    /**
     * @var string
     */
    public string $country;

    public string $areaCode;

    public string $numberBase;
}
