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

namespace Ixnode\PhpTimezone\Tests\Unit;

use Ixnode\PhpTimezone\Constants\CountryAfrica;
use Ixnode\PhpTimezone\Constants\CountryAmerica;
use Ixnode\PhpTimezone\Constants\CountryAsia;
use Ixnode\PhpTimezone\Constants\CountryAustralia;
use Ixnode\PhpTimezone\Constants\CountryEurope;
use Ixnode\PhpTimezone\Constants\CountryPacific;
use Ixnode\PhpTimezone\Constants\CountryUnknown;
use Ixnode\PhpTimezone\Constants\Language;
use Ixnode\PhpTimezone\Timezone;
use PHPUnit\Framework\TestCase;

/**
 * Class TimezoneTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-06-30)
 * @since 0.1.0 (2023-06-30) First version.
 * @link Timezone
 */
final class TimezoneTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @dataProvider dataProvider
     *
     * @test
     * @testdox $number) Test Timezone: $method
     * @param int $number
     * @param string $method
     * @param string|null $parameter
     * @param string $given
     * @param string $expected
     */
    public function wrapper(int $number, string $method, string|null $parameter, string $given, string $expected): void
    {
        /* Arrange */

        /* Act */
        $timezone = new Timezone($given);
        $callback = [$timezone, $method];

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertContains($method, get_class_methods(Timezone::class));
        $this->assertIsCallable($callback);

        $result = match (true) {
            is_null($parameter) => $timezone->{$method}(),
            default => $timezone->{$method}($parameter),
        };

        $this->assertSame($expected, $result);
    }

    /**
     * Data provider.
     *
     * @return array<int, array<int, string|int|null>>
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function dataProvider(): array
    {
        $number = 0;

        return [

            /**
             * getCountry/getCountryName: Africa
             */
            [++$number, 'getCountryCode', null, 'Africa/Abidjan', CountryAfrica::COUNTRY_CODE_CI],
            [++$number, 'getCountryName', null, 'Africa/Abidjan', CountryAfrica::COUNTRY_NAME_CI[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Africa/Accra', CountryAfrica::COUNTRY_CODE_GH],
            [++$number, 'getCountryName', null, 'Africa/Accra', CountryAfrica::COUNTRY_NAME_GH[Language::EN_GB]],

            /**
             * getCountry/getCountryName: Africa
             */
            [++$number, 'getCountryCode', null, 'America/Argentina/Tucuman', CountryAmerica::COUNTRY_CODE_AR],
            [++$number, 'getCountryName', null, 'America/Argentina/Tucuman', CountryAmerica::COUNTRY_NAME_AR[Language::EN_GB]],

            /**
             * getCountry/getCountryName: Asia
             */
            [++$number, 'getCountryCode', null, 'Asia/Almaty', CountryAsia::COUNTRY_CODE_KZ],
            [++$number, 'getCountryName', null, 'Asia/Almaty', CountryAsia::COUNTRY_NAME_KZ[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Dubai', CountryAsia::COUNTRY_CODE_AE],
            [++$number, 'getCountryName', null, 'Asia/Dubai', CountryAsia::COUNTRY_NAME_AE[Language::EN_GB]],

            /**
             * getCountry/getCountryName: Australia
             */
            [++$number, 'getCountryCode', null, 'Australia/Sydney', CountryAustralia::COUNTRY_CODE_AU],
            [++$number, 'getCountryName', null, 'Australia/Sydney', CountryAustralia::COUNTRY_NAME_AU[Language::EN_GB]],

            /**
             * getCountry/getCountryName: Europe
             */
            [++$number, 'getCountryCode', null, 'Europe/Andorra', CountryEurope::COUNTRY_CODE_AD],
            [++$number, 'getCountryName', null, 'Europe/Andorra', CountryEurope::COUNTRY_NAME_AD[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Amsterdam', CountryEurope::COUNTRY_CODE_NL],
            [++$number, 'getCountryName', null, 'Europe/Amsterdam', CountryEurope::COUNTRY_NAME_NL[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Belgrade', CountryEurope::COUNTRY_CODE_RS],
            [++$number, 'getCountryName', null, 'Europe/Belgrade', CountryEurope::COUNTRY_NAME_RS[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Berlin', CountryEurope::COUNTRY_CODE_DE],
            [++$number, 'getCountryName', null, 'Europe/Berlin', CountryEurope::COUNTRY_NAME_DE[Language::EN_GB]],
            [++$number, 'getCountryName', Language::EN_GB, 'Europe/Berlin', CountryEurope::COUNTRY_NAME_DE[Language::EN_GB]],
            [++$number, 'getCountryName', Language::DE_DE, 'Europe/Berlin', CountryEurope::COUNTRY_NAME_DE[Language::DE_DE]],
            [++$number, 'getCountryCode', null, 'Europe/Bratislava', CountryEurope::COUNTRY_CODE_SK],
            [++$number, 'getCountryName', null, 'Europe/Bratislava', CountryEurope::COUNTRY_NAME_SK[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Budapest', CountryEurope::COUNTRY_CODE_HU],
            [++$number, 'getCountryName', null, 'Europe/Budapest', CountryEurope::COUNTRY_NAME_HU[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Brussels', CountryEurope::COUNTRY_CODE_BE],
            [++$number, 'getCountryName', null, 'Europe/Brussels', CountryEurope::COUNTRY_NAME_BE[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Copenhagen', CountryEurope::COUNTRY_CODE_DK],
            [++$number, 'getCountryName', null, 'Europe/Copenhagen', CountryEurope::COUNTRY_NAME_DK[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Ljubljana', CountryEurope::COUNTRY_CODE_SI],
            [++$number, 'getCountryName', null, 'Europe/Ljubljana', CountryEurope::COUNTRY_NAME_SI[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Kyiv', CountryEurope::COUNTRY_CODE_UA],
            [++$number, 'getCountryName', null, 'Europe/Kyiv', CountryEurope::COUNTRY_NAME_UA[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/London', CountryEurope::COUNTRY_CODE_GB],
            [++$number, 'getCountryName', null, 'Europe/London', CountryEurope::COUNTRY_NAME_GB[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Luxembourg', CountryEurope::COUNTRY_CODE_LU],
            [++$number, 'getCountryName', null, 'Europe/Luxembourg', CountryEurope::COUNTRY_NAME_LU[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Madrid', CountryEurope::COUNTRY_CODE_ES],
            [++$number, 'getCountryName', null, 'Europe/Madrid', CountryEurope::COUNTRY_NAME_ES[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Monaco', CountryEurope::COUNTRY_CODE_MC],
            [++$number, 'getCountryName', null, 'Europe/Monaco', CountryEurope::COUNTRY_NAME_MC[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Moscow', CountryAsia::COUNTRY_CODE_RU],
            [++$number, 'getCountryName', null, 'Europe/Moscow', CountryAsia::COUNTRY_NAME_RU[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Oslo', CountryEurope::COUNTRY_CODE_NO],
            [++$number, 'getCountryName', null, 'Europe/Oslo', CountryEurope::COUNTRY_NAME_NO[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Paris', CountryEurope::COUNTRY_CODE_FR],
            [++$number, 'getCountryName', null, 'Europe/Paris', CountryEurope::COUNTRY_NAME_FR[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Prague', CountryEurope::COUNTRY_CODE_CZ],
            [++$number, 'getCountryName', null, 'Europe/Prague', CountryEurope::COUNTRY_NAME_CZ[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Rome', CountryEurope::COUNTRY_CODE_IT],
            [++$number, 'getCountryName', null, 'Europe/Rome', CountryEurope::COUNTRY_NAME_IT[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Stockholm', CountryEurope::COUNTRY_CODE_SE],
            [++$number, 'getCountryName', null, 'Europe/Stockholm', CountryEurope::COUNTRY_NAME_SE[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Vaduz', CountryEurope::COUNTRY_CODE_LI],
            [++$number, 'getCountryName', null, 'Europe/Vaduz', CountryEurope::COUNTRY_NAME_LI[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Vatican', CountryEurope::COUNTRY_CODE_VA],
            [++$number, 'getCountryName', null, 'Europe/Vatican', CountryEurope::COUNTRY_NAME_VA[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Warsaw', CountryEurope::COUNTRY_CODE_PL],
            [++$number, 'getCountryName', null, 'Europe/Warsaw', CountryEurope::COUNTRY_NAME_PL[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Zagreb', CountryEurope::COUNTRY_CODE_HR],
            [++$number, 'getCountryName', null, 'Europe/Zagreb', CountryEurope::COUNTRY_NAME_HR[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Zurich', CountryEurope::COUNTRY_CODE_CH],
            [++$number, 'getCountryName', null, 'Europe/Zurich', CountryEurope::COUNTRY_NAME_CH[Language::EN_GB]],

            /**
             * getCountry/getCountryName: Pacific
             */
            [++$number, 'getCountryCode', null, 'Pacific/Marquesas', CountryPacific::COUNTRY_CODE_PF],
            [++$number, 'getCountryName', null, 'Pacific/Marquesas', CountryPacific::COUNTRY_NAME_PF[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Pacific/Port_Moresby', CountryPacific::COUNTRY_CODE_PG],
            [++$number, 'getCountryName', null, 'Pacific/Port_Moresby', CountryPacific::COUNTRY_NAME_PG[Language::EN_GB]],

            /**
             * getCountry/getCountryName: Unknown/Invalid
             */
            [++$number, 'getCountryCode', null, '', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getCountryName', null, '', CountryUnknown::COUNTRY_NAME_IV[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Dresden', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getCountryName', null, 'Europe/Dresden', CountryUnknown::COUNTRY_NAME_IV[Language::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Ashkhabad', CountryUnknown::COUNTRY_CODE_UK],
            [++$number, 'getCountryName', null, 'Asia/Ashkhabad', CountryUnknown::COUNTRY_NAME_UK[Language::EN_GB]],
        ];
    }
}
