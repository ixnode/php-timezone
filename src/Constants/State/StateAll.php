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

namespace Ixnode\PhpTimezone\Constants\State;

use Ixnode\PhpTimezone\Constants\CountryEurope;
use Ixnode\PhpTimezone\Constants\State\Europe\StateAt;
use Ixnode\PhpTimezone\Constants\State\Europe\StateCh;
use Ixnode\PhpTimezone\Constants\State\Europe\StateDe;

/**
 * Class StateAll
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-20)
 * @since 0.1.0 (2024-11-20) First version.
 */
class StateAll
{
    public const STATE_NAMES = [

        /* Africa */

        /* Antarctica */

        /* Asia */

        /* Australia */

        /* Europe */
        CountryEurope::COUNTRY_CODE_AT => StateAt::STATES,
        CountryEurope::COUNTRY_CODE_CH => StateCh::STATES,
        CountryEurope::COUNTRY_CODE_DE => StateDe::STATES,

        /* North America */

        /* South America */

        /* Unknown/Invalid */

    ];
}
