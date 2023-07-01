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
 * Class CountryAfrica
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2023-07-01)
 * @since 0.1.0 (2023-07-01) First version.
 */
class CountryAfrica
{
    /*
     * Codes Africa
     */
    public const COUNTRY_CODE_CI = 'CI';
    public const COUNTRY_CODE_GH = 'GH';

    /*
     * Countries Africa
     */
    public const COUNTRY_NAME_CI = [
        Language::DE_DE => 'Elfenbeinküste',
        Language::EN_GB => 'Ivory Coast',
    ];
    public const COUNTRY_NAME_GH = [
        Language::DE_DE => 'Ghana',
        Language::EN_GB => 'Ghana',
    ];
}
