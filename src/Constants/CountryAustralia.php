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
 * Class CountryAustralia
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryAustralia
{
    /*
     * Codes Australia
     */
    public const COUNTRY_CODE_AU = 'AU';

    /*
     * Countries Australia
     */
    public const COUNTRY_NAME_AU = [
        Locale::DE_DE => 'Australien',
        Locale::EN_GB => 'Australia',
    ];
}
