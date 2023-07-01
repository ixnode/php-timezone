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
 * Class CountryAsia
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryAsia
{
    /*
     * Codes Asia
     */
    public const COUNTRY_CODE_AE = 'AE';
    public const COUNTRY_CODE_IN = 'IN';
    public const COUNTRY_CODE_KZ = 'KZ';
    public const COUNTRY_CODE_RU = 'RU';

    /*
     * Countries Asia
     */
    public const COUNTRY_NAME_AE = [
        Language::DE_DE => 'Vereinigte Arabische Emirate',
        Language::EN_GB => 'United Arab Emirates',
    ];
    public const COUNTRY_NAME_IN = [
        Language::DE_DE => 'Indien',
        Language::EN_GB => 'India',
    ];
    public const COUNTRY_NAME_KZ = [
        Language::DE_DE => 'Kasachstan',
        Language::EN_GB => 'Kazakhstan',
    ];
    public const COUNTRY_NAME_RU = [
        Language::DE_DE => 'Russland',
        Language::EN_GB => 'Russia',
    ];
}
