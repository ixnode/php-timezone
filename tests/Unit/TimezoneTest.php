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
use Ixnode\PhpTimezone\Constants\CountryAsia;
use Ixnode\PhpTimezone\Constants\CountryAustralia;
use Ixnode\PhpTimezone\Constants\CountryEurope;
use Ixnode\PhpTimezone\Constants\CountryNorthAmerica;
use Ixnode\PhpTimezone\Constants\CountrySouthAmerica;
use Ixnode\PhpTimezone\Constants\CountryUnknown;
use Ixnode\PhpTimezone\Constants\Locale;
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
            [++$number, 'getCountryName', null, 'Africa/Abidjan', CountryAfrica::COUNTRY_NAME_CI[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Africa/Accra', CountryAfrica::COUNTRY_CODE_GH],
            [++$number, 'getCountryName', null, 'Africa/Accra', CountryAfrica::COUNTRY_NAME_GH[Locale::EN_GB]],

            /**
             * getCountry/getCountryName: Asia
             */
            [++$number, 'getCountryCode', null, 'Asia/Almaty', CountryAsia::COUNTRY_CODE_KZ],
            [++$number, 'getCountryName', null, 'Asia/Almaty', CountryAsia::COUNTRY_NAME_KZ[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Bishkek', CountryAsia::COUNTRY_CODE_KG],
            [++$number, 'getCountryName', null, 'Asia/Bishkek', CountryAsia::COUNTRY_NAME_KG[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Dubai', CountryAsia::COUNTRY_CODE_AE],
            [++$number, 'getCountryName', null, 'Asia/Dubai', CountryAsia::COUNTRY_NAME_AE[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Jerusalem', CountryAsia::COUNTRY_CODE_IL],
            [++$number, 'getCountryName', null, 'Asia/Jerusalem', CountryAsia::COUNTRY_NAME_IL[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Kathmandu', CountryAsia::COUNTRY_CODE_NP],
            [++$number, 'getCountryName', null, 'Asia/Kathmandu', CountryAsia::COUNTRY_NAME_NP[Locale::EN_GB]],

            /**
             * getCountry/getCountryName: Australia
             */
            [++$number, 'getCountryCode', null, 'Australia/Sydney', CountryAustralia::COUNTRY_CODE_AU],
            [++$number, 'getCountryName', null, 'Australia/Sydney', CountryAustralia::COUNTRY_NAME_AU[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Pacific/Marquesas', CountryAustralia::COUNTRY_CODE_PF],
            [++$number, 'getCountryName', null, 'Pacific/Marquesas', CountryAustralia::COUNTRY_NAME_PF[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Pacific/Port_Moresby', CountryAustralia::COUNTRY_CODE_PG],
            [++$number, 'getCountryName', null, 'Pacific/Port_Moresby', CountryAustralia::COUNTRY_NAME_PG[Locale::EN_GB]],

            /**
             * getCountry/getCountryName: Europe
             */
            [++$number, 'getCountryCode', null, 'Asia/Nicosia', CountryEurope::COUNTRY_CODE_CY],
            [++$number, 'getCountryName', null, 'Asia/Nicosia', CountryEurope::COUNTRY_NAME_CY[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Andorra', CountryEurope::COUNTRY_CODE_AD],
            [++$number, 'getCountryName', null, 'Europe/Andorra', CountryEurope::COUNTRY_NAME_AD[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Amsterdam', CountryEurope::COUNTRY_CODE_NL],
            [++$number, 'getCountryName', null, 'Europe/Athens', CountryEurope::COUNTRY_NAME_GR[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Athens', CountryEurope::COUNTRY_CODE_GR],
            [++$number, 'getCountryName', null, 'Europe/Amsterdam', CountryEurope::COUNTRY_NAME_NL[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Belgrade', CountryEurope::COUNTRY_CODE_RS],
            [++$number, 'getCountryName', null, 'Europe/Belgrade', CountryEurope::COUNTRY_NAME_RS[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Berlin', CountryEurope::COUNTRY_CODE_DE],
            [++$number, 'getCountryName', null, 'Europe/Berlin', CountryEurope::COUNTRY_NAME_DE[Locale::EN_GB]],
            [++$number, 'getCountryName', Locale::EN_GB, 'Europe/Berlin', CountryEurope::COUNTRY_NAME_DE[Locale::EN_GB]],
            [++$number, 'getCountryName', Locale::DE_DE, 'Europe/Berlin', CountryEurope::COUNTRY_NAME_DE[Locale::DE_DE]],
            [++$number, 'getCountryCode', null, 'Europe/Bratislava', CountryEurope::COUNTRY_CODE_SK],
            [++$number, 'getCountryName', null, 'Europe/Bratislava', CountryEurope::COUNTRY_NAME_SK[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Budapest', CountryEurope::COUNTRY_CODE_HU],
            [++$number, 'getCountryName', null, 'Europe/Budapest', CountryEurope::COUNTRY_NAME_HU[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Brussels', CountryEurope::COUNTRY_CODE_BE],
            [++$number, 'getCountryName', null, 'Europe/Brussels', CountryEurope::COUNTRY_NAME_BE[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Copenhagen', CountryEurope::COUNTRY_CODE_DK],
            [++$number, 'getCountryName', null, 'Europe/Copenhagen', CountryEurope::COUNTRY_NAME_DK[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Dublin', CountryEurope::COUNTRY_CODE_IE],
            [++$number, 'getCountryName', null, 'Europe/Dublin', CountryEurope::COUNTRY_NAME_IE[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Ljubljana', CountryEurope::COUNTRY_CODE_SI],
            [++$number, 'getCountryName', null, 'Europe/Ljubljana', CountryEurope::COUNTRY_NAME_SI[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Kyiv', CountryEurope::COUNTRY_CODE_UA],
            [++$number, 'getCountryName', null, 'Europe/Kyiv', CountryEurope::COUNTRY_NAME_UA[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Lisbon', CountryEurope::COUNTRY_CODE_PT],
            [++$number, 'getCountryName', null, 'Europe/Lisbon', CountryEurope::COUNTRY_NAME_PT[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/London', CountryEurope::COUNTRY_CODE_GB],
            [++$number, 'getCountryName', null, 'Europe/London', CountryEurope::COUNTRY_NAME_GB[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Luxembourg', CountryEurope::COUNTRY_CODE_LU],
            [++$number, 'getCountryName', null, 'Europe/Luxembourg', CountryEurope::COUNTRY_NAME_LU[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Madrid', CountryEurope::COUNTRY_CODE_ES],
            [++$number, 'getCountryName', null, 'Europe/Madrid', CountryEurope::COUNTRY_NAME_ES[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Monaco', CountryEurope::COUNTRY_CODE_MC],
            [++$number, 'getCountryName', null, 'Europe/Monaco', CountryEurope::COUNTRY_NAME_MC[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Moscow', CountryEurope::COUNTRY_CODE_RU],
            [++$number, 'getCountryName', null, 'Europe/Moscow', CountryEurope::COUNTRY_NAME_RU[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Oslo', CountryEurope::COUNTRY_CODE_NO],
            [++$number, 'getCountryName', null, 'Europe/Oslo', CountryEurope::COUNTRY_NAME_NO[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Paris', CountryEurope::COUNTRY_CODE_FR],
            [++$number, 'getCountryName', null, 'Europe/Paris', CountryEurope::COUNTRY_NAME_FR[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Prague', CountryEurope::COUNTRY_CODE_CZ],
            [++$number, 'getCountryName', null, 'Europe/Prague', CountryEurope::COUNTRY_NAME_CZ[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Rome', CountryEurope::COUNTRY_CODE_IT],
            [++$number, 'getCountryName', null, 'Europe/Rome', CountryEurope::COUNTRY_NAME_IT[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Stockholm', CountryEurope::COUNTRY_CODE_SE],
            [++$number, 'getCountryName', null, 'Europe/Stockholm', CountryEurope::COUNTRY_NAME_SE[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Vaduz', CountryEurope::COUNTRY_CODE_LI],
            [++$number, 'getCountryName', null, 'Europe/Vaduz', CountryEurope::COUNTRY_NAME_LI[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Vatican', CountryEurope::COUNTRY_CODE_VA],
            [++$number, 'getCountryName', null, 'Europe/Vatican', CountryEurope::COUNTRY_NAME_VA[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Warsaw', CountryEurope::COUNTRY_CODE_PL],
            [++$number, 'getCountryName', null, 'Europe/Warsaw', CountryEurope::COUNTRY_NAME_PL[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Zagreb', CountryEurope::COUNTRY_CODE_HR],
            [++$number, 'getCountryName', null, 'Europe/Zagreb', CountryEurope::COUNTRY_NAME_HR[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Zurich', CountryEurope::COUNTRY_CODE_CH],
            [++$number, 'getCountryName', null, 'Europe/Zurich', CountryEurope::COUNTRY_NAME_CH[Locale::EN_GB]],

            /**
             * getCountry/getCountryName: North America
             */
            [++$number, 'getCountryCode', null, 'America/Bogota', CountrySouthAmerica::COUNTRY_CODE_CO],
            [++$number, 'getCountryName', null, 'America/Bogota', CountrySouthAmerica::COUNTRY_NAME_CO[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Chihuahua', CountryNorthAmerica::COUNTRY_CODE_MX],
            [++$number, 'getCountryName', null, 'America/Chihuahua', CountryNorthAmerica::COUNTRY_NAME_MX[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Hermosillo', CountryNorthAmerica::COUNTRY_CODE_MX],
            [++$number, 'getCountryName', null, 'America/Hermosillo', CountryNorthAmerica::COUNTRY_NAME_MX[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Matamoros', CountryNorthAmerica::COUNTRY_CODE_MX],
            [++$number, 'getCountryName', null, 'America/Matamoros', CountryNorthAmerica::COUNTRY_NAME_MX[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Monterrey', CountryNorthAmerica::COUNTRY_CODE_MX],
            [++$number, 'getCountryName', null, 'America/Monterrey', CountryNorthAmerica::COUNTRY_NAME_MX[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Nassau', CountryNorthAmerica::COUNTRY_CODE_BS],
            [++$number, 'getCountryName', null, 'America/Nassau', CountryNorthAmerica::COUNTRY_NAME_BS[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Ojinaga', CountryNorthAmerica::COUNTRY_CODE_MX],
            [++$number, 'getCountryName', null, 'America/Ojinaga', CountryNorthAmerica::COUNTRY_NAME_MX[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Puerto_Rico', CountryNorthAmerica::COUNTRY_CODE_PR],
            [++$number, 'getCountryName', null, 'America/Puerto_Rico', CountryNorthAmerica::COUNTRY_NAME_PR[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/St_Thomas', CountryNorthAmerica::COUNTRY_CODE_VI],
            [++$number, 'getCountryName', null, 'America/St_Thomas', CountryNorthAmerica::COUNTRY_NAME_VI[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'America/Tijuana', CountryNorthAmerica::COUNTRY_CODE_MX],
            [++$number, 'getCountryName', null, 'America/Tijuana', CountryNorthAmerica::COUNTRY_NAME_MX[Locale::EN_GB]],

            /**
             * getCountry/getCountryName: South America
             */
            [++$number, 'getCountryCode', null, 'America/Argentina/Tucuman', CountrySouthAmerica::COUNTRY_CODE_AR],
            [++$number, 'getCountryName', null, 'America/Argentina/Tucuman', CountrySouthAmerica::COUNTRY_NAME_AR[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Pacific/Easter', CountrySouthAmerica::COUNTRY_CODE_CL],
            [++$number, 'getCountryName', null, 'Pacific/Easter', CountrySouthAmerica::COUNTRY_NAME_CL[Locale::EN_GB]],

            /**
             * getCountry/getCountryName: Unknown/Invalid
             */
            [++$number, 'getCountryCode', null, '', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getCountryName', null, '', CountryUnknown::COUNTRY_NAME_IV[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Dresden', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getCountryName', null, 'Europe/Dresden', CountryUnknown::COUNTRY_NAME_IV[Locale::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Ashkhabad', CountryUnknown::COUNTRY_CODE_UK],
            [++$number, 'getCountryName', null, 'Asia/Ashkhabad', CountryUnknown::COUNTRY_NAME_UK[Locale::EN_GB]],
        ];
    }
}
