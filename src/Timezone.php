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
use Ixnode\PhpException\Case\CaseInvalidException;
use Ixnode\PhpTimezone\Tests\Unit\TimezoneTest;

/**
 * Class Timezone
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-19)
 * @since 0.1.0 (2022-12-19) First version.
 * @link TimezoneTest
 */
class Timezone
{
    /*
     * Languages
     */
    public const EN_GB = 'en_GB';
    public const DE_DE = 'de_DE';

    /*
     * Codes Africa
     */
    public const COUNTRY_CODE_CI = 'CI';
    public const COUNTRY_CODE_GH = 'GH';

    /*
     * Countries Africa
     */
    public const COUNTRY_NAME_CI = [
        self::EN_GB => 'Ivory Coast',
    ];
    public const COUNTRY_NAME_GH = [
        self::EN_GB => 'Ghana',
    ];

    /*
     * Codes America
     */
    public const COUNTRY_CODE_AR = 'AR';

    /*
     * Countries America
     */
    public const COUNTRY_NAME_AR = [
        self::EN_GB => 'Argentina',
    ];

    /*
     * Codes Asia
     */
    public const COUNTRY_CODE_AE = 'AE';
    public const COUNTRY_CODE_IN = 'IN';

    /*
     * Countries Asia
     */
    public const COUNTRY_NAME_AE = [
        self::DE_DE => 'Vereinigte Arabische Emirate',
        self::EN_GB => 'United Arab Emirates',
    ];
    public const COUNTRY_NAME_IN = [
        self::DE_DE => 'Indien',
        self::EN_GB => 'India',
    ];

    /*
     * Codes Asia
     */
    public const COUNTRY_CODE_AU = 'AU';

    /*
     * Countries Australia
     */
    public const COUNTRY_NAME_AU = [
        self::DE_DE => 'Australien',
        self::EN_GB => 'Australia',
    ];

    /*
     * Codes Europe
     */
    public const COUNTRY_CODE_CH = 'CH';
    public const COUNTRY_CODE_DE = 'DE';
    public const COUNTRY_CODE_NL = 'NL';

    /*
     * Countries Europe
     */
    public const COUNTRY_NAME_CH = [
        self::DE_DE => 'Schweiz',
        self::EN_GB => 'Switzerland',
    ];
    public const COUNTRY_NAME_DE = [
        self::DE_DE => 'Deutschland',
        self::EN_GB => 'Germany',
    ];
    public const COUNTRY_NAME_NL = [
        self::DE_DE => 'Niederland',
        self::EN_GB => 'Netherlands',
    ];

    /*
     * Codes Europe
     */
    public const COUNTRY_CODE_PG = 'PG';

    /*
     * Countries Europe
     */
    public const COUNTRY_NAME_PG = [
        self::DE_DE => 'Papua-Neuguinea',
        self::EN_GB => 'Papua New Guinea',
    ];

    private const COUNTRY_NAMES = [
        /*
         * Africa
         */
        self::COUNTRY_CODE_CI => self::COUNTRY_NAME_CI,
        self::COUNTRY_CODE_GH => self::COUNTRY_NAME_GH,

        /*
         * America
         */
        self::COUNTRY_CODE_AR => self::COUNTRY_NAME_AR,

        /*
         * Asia
         */
        self::COUNTRY_CODE_AE => self::COUNTRY_NAME_AE,
        self::COUNTRY_CODE_IN => self::COUNTRY_NAME_IN,

        /*
         * Australia
         */
        self::COUNTRY_CODE_AU => self::COUNTRY_NAME_AU,

        /*
         * Europe
         */
        self::COUNTRY_CODE_CH => self::COUNTRY_NAME_CH,
        self::COUNTRY_CODE_DE => self::COUNTRY_NAME_DE,
        self::COUNTRY_CODE_NL => self::COUNTRY_NAME_NL,

        /*
         * Pacific
         */
        self::COUNTRY_CODE_PG => self::COUNTRY_NAME_PG,
    ];

    /**
     * @param string $timezone
     */
    public function __construct(protected string $timezone)
    {
    }

    /**
     * Returns the country of given timezone.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        try {
            $dateTimeZone = new DateTimeZone($this->timezone);
            $location = $dateTimeZone->getLocation();

            if ($location === false) {
                return null;
            }

            return $location['country_code'];
        } catch (Exception) {
            return null;
        }
    }

    /**
     * Returns the country of given timezone.
     *
     * @param string $language
     * @return string|null
     * @throws ArrayKeyNotFoundException
     * @throws CaseInvalidException
     */
    public function getCountryName(string $language = self::EN_GB): ?string
    {
        $countryCode = $this->getCountryCode();

        if (is_null($countryCode)) {
            throw new CaseInvalidException($this->timezone, ['Valid timezone']);
        }

        if (!array_key_exists($countryCode, self::COUNTRY_NAMES)) {
            throw new ArrayKeyNotFoundException($countryCode);
        }

        $countryName = self::COUNTRY_NAMES[$countryCode];

        if (!array_key_exists($language, $countryName)) {
            throw new ArrayKeyNotFoundException($language);
        }

        return $countryName[$language];
    }
}
