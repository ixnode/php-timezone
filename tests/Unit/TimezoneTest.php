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
     * @testdox $number) Test SizeByte: $method
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
     */
    public function dataProvider(): array
    {
        $number = 0;

        return [

            /**
             * getCountry/getCountryName: Africa
             */
            [++$number, 'getCountryCode', null, 'Africa/Abidjan', Timezone::COUNTRY_CODE_CI],
            [++$number, 'getCountryName', null, 'Africa/Abidjan', Timezone::COUNTRY_NAME_CI[Timezone::EN_GB]],
            [++$number, 'getCountryCode', null, 'Africa/Accra', Timezone::COUNTRY_CODE_GH],
            [++$number, 'getCountryName', null, 'Africa/Accra', Timezone::COUNTRY_NAME_GH[Timezone::EN_GB]],

            /**
             * getCountry/getCountryName: Africa
             */
            [++$number, 'getCountryCode', null, 'America/Argentina/Tucuman', Timezone::COUNTRY_CODE_AR],
            [++$number, 'getCountryName', null, 'America/Argentina/Tucuman', Timezone::COUNTRY_NAME_AR[Timezone::EN_GB]],

            /**
             * getCountry/getCountryName: Asia
             */
            [++$number, 'getCountryCode', null, 'Asia/Dubai', Timezone::COUNTRY_CODE_AE],
            [++$number, 'getCountryName', null, 'Asia/Dubai', Timezone::COUNTRY_NAME_AE[Timezone::EN_GB]],

            /**
             * getCountry/getCountryName: Asia
             */
            [++$number, 'getCountryCode', null, 'Australia/Sydney', Timezone::COUNTRY_CODE_AU],
            [++$number, 'getCountryName', null, 'Australia/Sydney', Timezone::COUNTRY_NAME_AU[Timezone::EN_GB]],

            /**
             * getCountry/getCountryName: Europe
             */
            [++$number, 'getCountryCode', null, 'Europe/Amsterdam', Timezone::COUNTRY_CODE_NL],
            [++$number, 'getCountryName', null, 'Europe/Amsterdam', Timezone::COUNTRY_NAME_NL[Timezone::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Berlin', Timezone::COUNTRY_CODE_DE],
            [++$number, 'getCountryName', null, 'Europe/Berlin', Timezone::COUNTRY_NAME_DE[Timezone::EN_GB]],
            [++$number, 'getCountryName', Timezone::EN_GB, 'Europe/Berlin', Timezone::COUNTRY_NAME_DE[Timezone::EN_GB]],
            [++$number, 'getCountryName', Timezone::DE_DE, 'Europe/Berlin', Timezone::COUNTRY_NAME_DE[Timezone::DE_DE]],
            [++$number, 'getCountryCode', null, 'Europe/Zurich', Timezone::COUNTRY_CODE_CH],
            [++$number, 'getCountryName', null, 'Europe/Zurich', Timezone::COUNTRY_NAME_CH[Timezone::EN_GB]],

            /**
             * getCountry/getCountryName: Pacific
             */
            [++$number, 'getCountryCode', null, 'Pacific/Port_Moresby', Timezone::COUNTRY_CODE_PG],
            [++$number, 'getCountryName', null, 'Pacific/Port_Moresby', Timezone::COUNTRY_NAME_PG[Timezone::EN_GB]],

            /**
             * getCountry/getCountryName: Unknown/Invalid
             */
            [++$number, 'getCountryCode', null, '', Timezone::COUNTRY_CODE_IV],
            [++$number, 'getCountryName', null, '', Timezone::COUNTRY_NAME_IV[Timezone::EN_GB]],
            [++$number, 'getCountryCode', null, 'Europe/Dresden', Timezone::COUNTRY_CODE_IV],
            [++$number, 'getCountryName', null, 'Europe/Dresden', Timezone::COUNTRY_NAME_IV[Timezone::EN_GB]],
            [++$number, 'getCountryCode', null, 'Asia/Ashkhabad', Timezone::COUNTRY_CODE_UK],
            [++$number, 'getCountryName', null, 'Asia/Ashkhabad', Timezone::COUNTRY_NAME_UK[Timezone::EN_GB]],
        ];
    }
}
