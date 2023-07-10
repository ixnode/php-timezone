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

namespace Ixnode\PhpTimezone;

use DateTimeZone;
use Exception;
use Ixnode\PhpException\ArrayType\ArrayKeyNotFoundException;
use Ixnode\PhpTimezone\Constants\CountryAll;
use Ixnode\PhpTimezone\Constants\CountryUnknown;
use Ixnode\PhpTimezone\Constants\Language;
use Ixnode\PhpTimezone\Tests\Unit\TimezoneTest;

/**
 * Class Timezone
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-06-30)
 * @since 0.1.0 (2023-06-30) First version.
 * @link TimezoneTest
 */
class Timezone
{
    /**
     * @param string $timezone
     */
    public function __construct(protected string $timezone)
    {
    }

    /**
     * Returns the country of given timezone.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        if ($this->timezone === '') {
            return CountryUnknown::COUNTRY_CODE_IV;
        }

        if ($this->timezone === 'Europe/Kyiv') {
            $this->timezone = 'Europe/Kiev';
        }

        try {
            $dateTimeZone = new DateTimeZone($this->timezone);
            $location = $dateTimeZone->getLocation();

            if ($location === false) {
                return CountryUnknown::COUNTRY_CODE_IV;
            }

            $countryCode = $location['country_code'];

            if ($countryCode === '??') {
                return CountryUnknown::COUNTRY_CODE_UK;
            }

            return $countryCode;
        } catch (Exception) {
            return CountryUnknown::COUNTRY_CODE_IV;
        }
    }

    /**
     * Returns the country of given timezone.
     *
     * @param string $language
     * @return string|null
     * @throws ArrayKeyNotFoundException
     */
    public function getCountryName(string $language = Language::EN_GB): ?string
    {
        $countryCode = $this->getCountryCode();

        if (!array_key_exists($countryCode, CountryAll::COUNTRY_NAMES)) {
            throw new ArrayKeyNotFoundException($countryCode);
        }

        $countryName = CountryAll::COUNTRY_NAMES[$countryCode];

        if (!array_key_exists($language, $countryName)) {
            throw new ArrayKeyNotFoundException($language);
        }

        return $countryName[$language];
    }
}
