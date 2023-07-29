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
 * Class CountryAmerica
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryAmerica
{
    /*
     * Codes America
     */
    public const COUNTRY_CODE_AR = 'AR';
    public const COUNTRY_CODE_BS = 'BS';
    public const COUNTRY_CODE_CA = 'CA';
    public const COUNTRY_CODE_CL = 'CL';
    public const COUNTRY_CODE_CO = 'CO';
    public const COUNTRY_CODE_MX = 'MX';
    public const COUNTRY_CODE_PR = 'PR';
    public const COUNTRY_CODE_US = 'US';
    public const COUNTRY_CODE_VI = 'VI';

    /*
     * Countries America
     */
    public const COUNTRY_NAME_AR = [
        Locale::DE_DE => 'Argentinien',
        Locale::EN_GB => 'Argentina',
    ];
    public const COUNTRY_NAME_CA = [
        Locale::DE_DE => 'Canada',
        Locale::EN_GB => 'Canada',
    ];
    public const COUNTRY_NAME_CL = [
        Locale::DE_DE => 'Chile',
        Locale::EN_GB => 'Chile',
    ];
    public const COUNTRY_NAME_CO = [
        Locale::DE_DE => 'Kolumbien',
        Locale::EN_GB => 'Colombia',
    ];
    public const COUNTRY_NAME_BS = [
        Locale::DE_DE => 'Bahamas',
        Locale::EN_GB => 'The Bahamas',
    ];
    public const COUNTRY_NAME_MX = [
        Locale::DE_DE => 'Mexico',
        Locale::EN_GB => 'Mexico',
    ];
    public const COUNTRY_NAME_PR = [
        Locale::DE_DE => 'Puerto Rico',
        Locale::EN_GB => 'Puerto Rico',
    ];
    public const COUNTRY_NAME_US = [
        Locale::DE_DE => 'Vereinigte Staaten',
        Locale::EN_GB => 'United States',
    ];
    public const COUNTRY_NAME_VI = [
        Locale::DE_DE => 'Amerikanische Jungferninseln',
        Locale::EN_GB => 'United States Virgin Islands',
    ];
}
