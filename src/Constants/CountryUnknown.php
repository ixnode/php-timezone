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
 * Class Country
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryUnknown
{
    /*
     * Codes Unknown/Invalid
     */
    public const COUNTRY_CODE_UK = 'UK';
    public const COUNTRY_CODE_IV = 'IV';

    /*
     * Countries Unknown/Invalid
     */
    public const COUNTRY_NAME_UK = [
        Language::DE_DE => 'Unbekannt',
        Language::EN_GB => 'Unknown',
    ];
    public const COUNTRY_NAME_IV = [
        Language::DE_DE => 'Ungültig',
        Language::EN_GB => 'Invalid',
    ];
}
