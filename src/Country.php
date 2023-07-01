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
    private const LENGTH_COUNTRY_CODE = 2;

    /**
     * @param string $countryCode
     */
    public function __construct(protected string $countryCode)
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
        if ($this->countryCode === '') {
            return CountryUnknown::COUNTRY_CODE_IV;
        }

        if (strlen($this->countryCode) !== self::LENGTH_COUNTRY_CODE) {
            return CountryUnknown::COUNTRY_CODE_IV;
        }

        if (!array_key_exists($this->countryCode, CountryAll::COUNTRY_NAMES)) {
            return CountryUnknown::COUNTRY_CODE_UK;
        }

        return $this->countryCode;
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
        $countryCode = $this->getCode();

        if ($countryCode === CountryUnknown::COUNTRY_CODE_IV) {
            return $this->getLanguage(CountryUnknown::COUNTRY_NAME_IV, $language);
        }

        if ($countryCode === CountryUnknown::COUNTRY_CODE_UK) {
            return $this->getLanguage(CountryUnknown::COUNTRY_NAME_UK, $language);
        }

        if (!array_key_exists($countryCode, CountryAll::COUNTRY_NAMES)) {
            return $this->getLanguage(CountryUnknown::COUNTRY_NAME_UK, $language);
        }

        return $this->getLanguage(CountryAll::COUNTRY_NAMES[$this->countryCode], $language);
    }
}
