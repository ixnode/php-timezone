<?php

/*
 * This file is part of the ixnode/php-timezone project.
 *
 * (c) Björn Hempel <https://www.hempel.li/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Ixnode\PhpTimezone\Constants;

/**
 * Class CountryAntarctica (auto-generated with bin/build-countries from "data/antarctica.csv")
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-30 11:20:50)
 * @since 0.1.0 (2023-07-30 11:20:50) Generated version.
 */
class CountryAntarctica
{
    /* Country codes */
    public const COUNTRY_CODE_AQ = 'AQ';

    /* Country language names */
    public const COUNTRY_NAME_AQ = [
        Locale::CS_CZ => 'Antarktida',
        Locale::DE_DE => 'Antarktis',
        Locale::EN_GB => 'Antarctica',
        Locale::ES_ES => 'Antártida',
        Locale::FR_FR => 'Antarctique',
        Locale::HR_HR => 'Antarktika',
        Locale::IT_IT => 'Antartide',
        Locale::PL_PL => 'Antarktyka',
        Locale::SE_SE => 'Antarktis',
    ];

    /* Countries */
    public const COUNTRIES = [
        self::COUNTRY_CODE_AQ => ['name' => self::COUNTRY_NAME_AQ, 'iso2' => 'AQ', 'iso3' => 'ATA', 'tld' => 'aq', ],
    ];
}
