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
 * Class CountryAll
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryAll
{
    public const COUNTRY_NAMES = [
        /*
         * Africa
         */
        CountryAfrica::COUNTRY_CODE_CI => CountryAfrica::COUNTRY_NAME_CI,
        CountryAfrica::COUNTRY_CODE_GH => CountryAfrica::COUNTRY_NAME_GH,

        /*
         * America
         */
        CountryAmerica::COUNTRY_CODE_AR => CountryAmerica::COUNTRY_NAME_AR,

        /*
         * Asia
         */
        CountryAsia::COUNTRY_CODE_AE => CountryAsia::COUNTRY_NAME_AE,
        CountryAsia::COUNTRY_CODE_IN => CountryAsia::COUNTRY_NAME_IN,
        CountryAsia::COUNTRY_CODE_KZ => CountryAsia::COUNTRY_NAME_KZ,
        CountryAsia::COUNTRY_CODE_RU => CountryAsia::COUNTRY_NAME_RU,

        /*
         * Australia
         */
        CountryAustralia::COUNTRY_CODE_AU => CountryAustralia::COUNTRY_NAME_AU,

        /*
         * Europe
         */
        CountryEurope::COUNTRY_CODE_AD => CountryEurope::COUNTRY_NAME_AD,
        CountryEurope::COUNTRY_CODE_AT => CountryEurope::COUNTRY_NAME_AT,
        CountryEurope::COUNTRY_CODE_BE => CountryEurope::COUNTRY_NAME_BE,
        CountryEurope::COUNTRY_CODE_CH => CountryEurope::COUNTRY_NAME_CH,
        CountryEurope::COUNTRY_CODE_CZ => CountryEurope::COUNTRY_NAME_CZ,
        CountryEurope::COUNTRY_CODE_DE => CountryEurope::COUNTRY_NAME_DE,
        CountryEurope::COUNTRY_CODE_DK => CountryEurope::COUNTRY_NAME_DK,
        CountryEurope::COUNTRY_CODE_ES => CountryEurope::COUNTRY_NAME_ES,
        CountryEurope::COUNTRY_CODE_FR => CountryEurope::COUNTRY_NAME_FR,
        CountryEurope::COUNTRY_CODE_IT => CountryEurope::COUNTRY_NAME_IT,
        CountryEurope::COUNTRY_CODE_NL => CountryEurope::COUNTRY_NAME_NL,
        CountryEurope::COUNTRY_CODE_LU => CountryEurope::COUNTRY_NAME_LU,
        CountryEurope::COUNTRY_CODE_PL => CountryEurope::COUNTRY_NAME_PL,
        CountryEurope::COUNTRY_CODE_RS => CountryEurope::COUNTRY_NAME_RS,
        CountryEurope::COUNTRY_CODE_SK => CountryEurope::COUNTRY_NAME_SK,

        /*
         * Pacific
         */
        CountryPacific::COUNTRY_CODE_PG => CountryPacific::COUNTRY_NAME_PG,

        /*
         * Unknown/Invalid
         */
        CountryUnknown::COUNTRY_CODE_UK => CountryUnknown::COUNTRY_NAME_UK,
        CountryUnknown::COUNTRY_CODE_IV => CountryUnknown::COUNTRY_NAME_IV,
    ];
}
