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
 * Class CountryPacific
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryPacific
{
    /*
     * Codes Pacific
     */
    public const COUNTRY_CODE_PF = 'PF';
    public const COUNTRY_CODE_PG = 'PG';

    /*
     * Countries Pacific
     */
    public const COUNTRY_NAME_PF = [
        Language::DE_DE => 'Französisch-Polynesien',
        Language::EN_GB => 'French Polynesia',
    ];
    public const COUNTRY_NAME_PG = [
        Language::DE_DE => 'Papua-Neuguinea',
        Language::EN_GB => 'Papua New Guinea',
    ];
}
