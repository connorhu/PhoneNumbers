<?php

namespace Connor\PhoneNumbers;

class NumberAnalyzer
{
    /**
     * Return ISO 3166-1 alpha-2 or NGS or UN
     * @see https://en.wikipedia.org/wiki/List_of_telephone_country_codes
     * @param string $number
     * @return string
     * @throws \Exception
     */
    public function getCountryCode(string $number): string
    {
        // remove prefix
        if (str_starts_with($number, '+')) {
            $current = substr($number, 1);
        } elseif (str_starts_with($number, '00')) {
            $current = substr($number, 2);
        } else {
            throw new \Exception('Invalid prefix.');
        }

        return match ((int) substr($current, 0, 1)) {
            1 => match ((int)substr($current, 1, 3)) {
                242 => 'BS',
                246 => 'BB',
                264 => 'AI',
                268 => 'AG',
                284 => 'VG',
                340 => 'VI',
                345 => 'KY',
                441 => 'BM',
                473 => 'G',
                649 => 'TC',
                658, 876 => 'JM',
                664 => 'MS',
                670 => 'MP',
                671 => 'GU',
                684 => 'AS',
                721 => 'SX',
                758 => 'LC',
                767 => 'DM',
                784 => 'VC',
                787, 939 => 'PR',
                809, 829, 849 => 'DO',
                868 => 'TT',
                869 => 'KN',
                default => 'US',
            },
            2 => match ((int)substr($current, 0, 2)) {
                20 => 'EG',
                21 => match ((int)substr($current, 2, 3)) {
                    211 => 'SS',
                    212 => 'MA', // EH
                    213 => 'DZ',
                    216 => 'TN',
                    218 => 'LY',
                },
                22 => match ((int)substr($current, 2, 3)) {
                    220 => 'GM',
                    221 => 'SN',
                    222 => 'MR',
                    223 => 'ML',
                    224 => 'GN',
                    225 => 'CI',
                    226 => 'BF',
                    227 => 'NE',
                    228 => 'TG',
                    229 => 'BJ',
                },
                23 => match ((int)substr($current, 2, 3)) {
                    230 => 'MU',
                    231 => 'LR',
                    232 => 'SL',
                    233 => 'GH',
                    234 => 'NG',
                    235 => 'TD',
                    236 => 'CF',
                    237 => 'CM',
                    238 => 'CV',
                    239 => 'ST',
                },
                24 => match ((int)substr($current, 2, 3)) {
                    240 => 'GQ',
                    241 => 'GA',
                    242 => 'CG',
                    243 => 'CD',
                    244 => 'AO',
                    245 => 'GW',
                    246 => 'IO',
                    247 => 'AC',
                    248 => 'SC',
                    249 => 'SD',
                },
                25 => match ((int)substr($current, 2, 3)) {
                    250 => 'RW',
                    251 => 'ET',
                    252 => 'SO',
                    253 => 'DJ',
                    254 => 'KE',
                    255 => 'TZ',
                    256 => 'UG',
                    257 => 'BI',
                    258 => 'MZ',
                },
                26 => match ((int)substr($current, 2, 3)) {
                    260 => 'ZM',
                    261 => 'MG',
                    262 => 'RE', // YT, TF
                    263 => 'ZW',
                    264 => 'NA',
                    265 => 'MW',
                    266 => 'LS',
                    267 => 'BW',
                    268 => 'SZ',
                    269 => 'KM',
                },
                27 => 'ZA',
                29 => match ((int)substr($current, 2, 3)) {
                    290 => 'SH', // TA
                    291 => 'ER',
                    297 => 'AW',
                    298 => 'FO',
                    299 => 'GL',
                },
	        },
            3 => match ((int)substr($current, 0, 2)) {
                30 => 'GR',
                31 => 'NL',
                32 => 'BE',
                33 => 'FR',
                34 => 'ES',
                35 => match ((int)substr($current, 0, 3)) {
                    350 => 'GI',
                    351 => 'PT',
                    352 => 'LU',
                    353 => 'IE',
                    354 => 'IS',
                    355 => 'AL',
                    356 => 'MT',
                    357 => 'CY',
                    358 => 'FI', // AX
                    359 => 'BG',
                },
                36 => 'HU',
                37 => match ((int)substr($current, 0, 3)) {
                    370 => 'LT',
                    371 => 'LV',
                    372 => 'EE',
                    373 => 'MD',
                    374 => 'AM',
                    375 => 'BY',
                    376 => 'AD',
                    377 => 'MC',
                    378 => 'SM',
                    379 => 'VA',
                },
                38 => match ((int)substr($current, 0, 3)) {
                    380 => 'UA',
                    381 => 'RS',
                    382 => 'ME',
                    383 => 'XK',
                    385 => 'HR',
                    386 => 'SI',
                    387 => 'BA',
                    389 => 'MK',
                },
                39 => 'IT',
                40 => 'RO',
                41 => 'CH',
                42 => match ((int)substr($current, 0, 3)) {
                    420 => 'CZ',
                    421 => 'SK',
                    423 => 'LI',
                },
                43 => 'AT',
                44 => 'GB', // GG, IM, JE
                45 => 'DK',
                46 => 'SE',
                47 => 'NO', // SJ, BV
                48 => 'PL',
                49 => 'DE',
            },
            5 => match ((int)substr($current, 0, 2)) {
                50 => match ((int)substr($current, 0, 3)) {
                    500 => 'FK', // GS
                    501 => 'BZ',
                    502 => 'GT',
                    503 => 'SV',
                    504 => 'HN',
                    505 => 'NI',
                    506 => 'CR',
                    507 => 'PA',
                    508 => 'PM',
                    509 => 'HT',
                },
                51 => 'PE',
                52 => 'MX',
                53 => 'CU',
                54 => 'AR',
                55 => 'BR',
                56 => 'CL',
                57 => 'CO',
                58 => 'VE',
                59 => match ((int)substr($current, 0, 3)) {
                    590 => 'GP', // BL, MF
                    591 => 'BO',
                    592 => 'GY',
                    593 => 'EC',
                    594 => 'GF',
                    595 => 'PY',
                    596 => 'MQ',
                    597 => 'SR',
                    598 => 'UY',
                    599 => 'BQ', // CW
                },
            },
            6 => match ((int)substr($current, 0, 2)) {
                60 => 'MY',
                61 => 'AU', // CX, CC
                62 => 'ID',
                63 => 'PH',
                64 => 'NZ', // PN
                65 => 'SG',
                66 => 'TH',
                67 => match ((int)substr($current, 0, 3)) {
                    670 => 'TL',
                    672 => 'NF', // , AQ
                    673 => 'BN',
                    674 => 'NR',
                    675 => 'PG',
                    676 => 'TO',
                    677 => 'SB',
                    678 => 'VU',
                    679 => 'FJ',
                },
                68 => match ((int)substr($current, 0, 3)) {
                    680 => 'PW',
                    681 => 'WF',
                    682 => 'CK',
                    683 => 'NU',
                    685 => 'WS',
                    686 => 'KI',
                    687 => 'NC',
                    688 => 'TV',
                    689 => 'PF',
                },
                69 => match ((int)substr($current, 0, 3)) {
                    690 => 'TK',
                    691 => 'FM',
                    692 => 'MH',
                },
            },
            7 => match ((int)substr($current, 0, 2)) {
                70, 76, 77 => 'KZ',
                71, 72, 73, 74, 75, 78, 79 => 'RU',
            },
            8 => match ((int)substr($current, 0, 2)) {
                80 => match ((int)substr($current, 0, 3)) {
                    800, 808 => 'NGS',
                },
                81 => 'JP',
                82 => 'KR',
                84 => 'VN',
                85 => match ((int)substr($current, 0, 3)) {
                    850 => 'KP',
                    852 => 'HK',
                    853 => 'MO',
                    855 => 'KH',
                    856 => 'LA',
                },
                86 => 'CN',
                87 => match ((int)substr($current, 0, 3)) {
                    870, 878 => 'NGS',
                },
                88 => match ((int)substr($current, 0, 3)) {
                    880 => 'BD',
                    881, 882, 883 => 'NGS',
                    886 => 'TW',
                    888 => 'UN',
                },
            },
            9 => match ((int)substr($current, 0, 2)) {
                90 => 'TR', // CT
                91 => 'IN',
                92 => 'PK',
                93 => 'AF',
                94 => 'LK',
                95 => 'MM',
                96 => match ((int)substr($current, 0, 3)) {
                    960 => 'MV',
                    961 => 'LB',
                    962 => 'JO',
                    963 => 'SY',
                    964 => 'IQ',
                    965 => 'KW',
                    966 => 'SA',
                    967 => 'YE',
                    968 => 'OM',
                },
                97 => match ((int)substr($current, 0, 3)) {
                    970 => 'PS',
                    971 => 'AE',
                    972 => 'IL', // PS
                    973 => 'BH',
                    974 => 'QA',
                    975 => 'BT',
                    976 => 'MN',
                    977 => 'NP',
                    979 => 'NGS',
                },
                98 => 'IR',
                99 => match ((int)substr($current, 0, 3)) {
                    991 => 'NGS',
                    992 => 'TJ',
                    993 => 'TM',
                    994 => 'AZ',
                    995 => 'GE',
                    996 => 'KG',
                    998 => 'UZ',
                },
            }
        };
    }

    public function analyze(string $number, ?string $country = null): NumberInfo
    {
        $info = new NumberInfo();

        if ($country === null) {
            $country = $this->getCountryCode($number);
        }

        $info->country = $country;

        return $info;
    }
}
