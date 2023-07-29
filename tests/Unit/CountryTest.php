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
use Ixnode\PhpTimezone\Constants\Locale;
use Ixnode\PhpTimezone\Country;
use PHPUnit\Framework\TestCase;

/**
 * Class CountryTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-06-30)
 * @since 0.1.0 (2023-06-30) First version.
 * @link Country
 */
final class CountryTest extends TestCase
{
    /**
     * Test wrapper.
     *
     * @dataProvider dataProvider
     *
     * @test
     * @testdox $number) Test Country: $method
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
        $timezone = new Country($given);
        $callback = [$timezone, $method];

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertContains($method, get_class_methods(Country::class));
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
     */
    public function dataProvider(): array
    {
        $number = 0;

        return [

            /**
             * getName: Africa
             */
            [++$number, 'getCode', null, CountryAfrica::COUNTRY_CODE_CI, CountryAfrica::COUNTRY_CODE_CI],
            [++$number, 'getName', null, CountryAfrica::COUNTRY_CODE_CI, CountryAfrica::COUNTRY_NAME_CI[Locale::EN_GB]],
            [++$number, 'getCode', null, CountryAfrica::COUNTRY_CODE_GH, CountryAfrica::COUNTRY_CODE_GH],
            [++$number, 'getName', null, CountryAfrica::COUNTRY_CODE_GH, CountryAfrica::COUNTRY_NAME_GH[Locale::EN_GB]],

            /**
             * getName: Africa
             */
            [++$number, 'getCode', null, CountryAmerica::COUNTRY_CODE_AR, CountryAmerica::COUNTRY_CODE_AR],
            [++$number, 'getName', null, CountryAmerica::COUNTRY_CODE_AR, CountryAmerica::COUNTRY_NAME_AR[Locale::EN_GB]],

            /**
             * getName: Asia
             */
            [++$number, 'getCode', null, CountryAsia::COUNTRY_CODE_AE, CountryAsia::COUNTRY_CODE_AE],
            [++$number, 'getName', null, CountryAsia::COUNTRY_CODE_AE, CountryAsia::COUNTRY_NAME_AE[Locale::EN_GB]],
            [++$number, 'getCode', null, CountryAsia::COUNTRY_CODE_IN, CountryAsia::COUNTRY_CODE_IN],
            [++$number, 'getName', null, CountryAsia::COUNTRY_CODE_IN, CountryAsia::COUNTRY_NAME_IN[Locale::EN_GB]],
            [++$number, 'getCode', null, CountryAsia::COUNTRY_CODE_KZ, CountryAsia::COUNTRY_CODE_KZ],
            [++$number, 'getName', null, CountryAsia::COUNTRY_CODE_KZ, CountryAsia::COUNTRY_NAME_KZ[Locale::EN_GB]],
            [++$number, 'getCode', null, CountryAsia::COUNTRY_CODE_RU, CountryAsia::COUNTRY_CODE_RU],
            [++$number, 'getName', null, CountryAsia::COUNTRY_CODE_RU, CountryAsia::COUNTRY_NAME_RU[Locale::EN_GB]],

            /**
             * getName: Australia
             */
            [++$number, 'getName', null, CountryAustralia::COUNTRY_CODE_AU, CountryAustralia::COUNTRY_NAME_AU[Locale::EN_GB]],

            /**
             * getName: Europe
             */
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_AD, CountryEurope::COUNTRY_NAME_AD[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_BE, CountryEurope::COUNTRY_NAME_BE[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_CH, CountryEurope::COUNTRY_NAME_CH[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_CZ, CountryEurope::COUNTRY_NAME_CZ[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_DE, CountryEurope::COUNTRY_NAME_DE[Locale::EN_GB]],
            [++$number, 'getName', Locale::EN_GB, CountryEurope::COUNTRY_CODE_DE, CountryEurope::COUNTRY_NAME_DE[Locale::EN_GB]],
            [++$number, 'getName', Locale::DE_DE, CountryEurope::COUNTRY_CODE_DE, CountryEurope::COUNTRY_NAME_DE[Locale::DE_DE]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_DK, CountryEurope::COUNTRY_NAME_DK[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_ES, CountryEurope::COUNTRY_NAME_ES[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_FR, CountryEurope::COUNTRY_NAME_FR[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_GB, CountryEurope::COUNTRY_NAME_GB[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_IT, CountryEurope::COUNTRY_NAME_IT[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_HR, CountryEurope::COUNTRY_NAME_HR[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_HU, CountryEurope::COUNTRY_NAME_HU[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_LI, CountryEurope::COUNTRY_NAME_LI[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_LU, CountryEurope::COUNTRY_NAME_LU[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_MC, CountryEurope::COUNTRY_NAME_MC[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_NL, CountryEurope::COUNTRY_NAME_NL[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_NO, CountryEurope::COUNTRY_NAME_NO[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_PL, CountryEurope::COUNTRY_NAME_PL[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_RS, CountryEurope::COUNTRY_NAME_RS[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_SE, CountryEurope::COUNTRY_NAME_SE[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_SI, CountryEurope::COUNTRY_NAME_SI[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_SK, CountryEurope::COUNTRY_NAME_SK[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_UA, CountryEurope::COUNTRY_NAME_UA[Locale::EN_GB]],
            [++$number, 'getName', null, CountryEurope::COUNTRY_CODE_VA, CountryEurope::COUNTRY_NAME_VA[Locale::EN_GB]],

            /**
             * getName: Pacific
             */
            [++$number, 'getName', null, CountryPacific::COUNTRY_CODE_PF, CountryPacific::COUNTRY_NAME_PF[Locale::EN_GB]],
            [++$number, 'getName', null, CountryPacific::COUNTRY_CODE_PG, CountryPacific::COUNTRY_NAME_PG[Locale::EN_GB]],

            /**
             * getName: Unknown/Invalid
             */
            [++$number, 'getCode', null, '', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getName', null, '', CountryUnknown::COUNTRY_NAME_IV[Locale::EN_GB]],
            [++$number, 'getCode', null, 'DEU', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getName', null, 'DEU', CountryUnknown::COUNTRY_NAME_IV[Locale::EN_GB]],
            [++$number, 'getCode', null, 'D', CountryUnknown::COUNTRY_CODE_IV],
            [++$number, 'getName', null, 'D', CountryUnknown::COUNTRY_NAME_IV[Locale::EN_GB]],
            [++$number, 'getCode', null, 'XX', CountryUnknown::COUNTRY_CODE_UK],
            [++$number, 'getName', null, 'XX', CountryUnknown::COUNTRY_NAME_UK[Locale::EN_GB]],
        ];
    }
}
