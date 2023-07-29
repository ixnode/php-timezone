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
    public const COUNTRY_CODE_CA = 'CA';
    public const COUNTRY_CODE_US = 'US';

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
    public const COUNTRY_NAME_US = [
        Locale::DE_DE => 'Vereinigte Staaten',
        Locale::EN_GB => 'United States',
    ];
}
