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

use Ixnode\PhpException\ArrayType\ArrayKeyNotFoundException;
use Ixnode\PhpTimezone\Constants\CountryAll;
use Ixnode\PhpTimezone\Constants\CountryUnknown;
use Ixnode\PhpTimezone\Constants\Language;
use Ixnode\PhpTimezone\Tests\Unit\CountryTest;

/**
 * Class Country
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 * @link CountryTest
 */
class Country
{
    /**
     * @param string $country
     */
    public function __construct(protected string $country)
    {
    }

    /**
     * Returns the language string of given values.
     *
     * @param array<string, string> $values
     * @param string $language
     * @return string
     * @throws ArrayKeyNotFoundException
     */
    private function getLanguage(array $values, string $language): string
    {
        if (!array_key_exists($language, $values)) {
            throw new ArrayKeyNotFoundException($language);
        }

        return $values[$language];
    }

    /**
     * Returns the code of country.
     *
     * @return string
     */
    public function getCode(): string
    {
        if ($this->country === '') {
            return CountryUnknown::COUNTRY_CODE_IV;
        }

        if (!array_key_exists($this->country, CountryAll::COUNTRY_NAMES)) {
            return CountryUnknown::COUNTRY_CODE_UK;
        }

        return $this->country;
    }

    /**
     * Returns the name of country.
     *
     * @param string $language
     * @return string
     * @throws ArrayKeyNotFoundException
     */
    public function getName(string $language = Language::EN_GB): string
    {
        if ($this->country === '') {
            return $this->getLanguage(CountryUnknown::COUNTRY_NAME_IV, $language);
        }

        if (!array_key_exists($this->country, CountryAll::COUNTRY_NAMES)) {
            return $this->getLanguage(CountryUnknown::COUNTRY_NAME_UK, $language);
        }

        return $this->getLanguage(CountryAll::COUNTRY_NAMES[$this->country], $language);
    }
}
