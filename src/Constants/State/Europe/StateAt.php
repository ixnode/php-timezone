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

namespace Ixnode\PhpTimezone\Constants\State\Europe;

use Ixnode\PhpTimezone\Constants\Locale;

/**
 * Class StateAt
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2024-11-20)
 * @since 0.1.0 (2024-11-20) First version.
 */
class StateAt
{
    /* State codes */
    public const STATE_CODE_ALL = 'ALL';
    public const STATE_CODE_B = 'B';
    public const STATE_CODE_K = 'K';
    public const STATE_CODE_N = 'N';
    public const STATE_CODE_O = 'O';
    public const STATE_CODE_S = 'S';
    public const STATE_CODE_ST = 'ST';
    public const STATE_CODE_T = 'T';
    public const STATE_CODE_V = 'V';
    public const STATE_CODE_W = 'W';

    /* State language names */
    public const STATE_NAME_ALL = [
        Locale::CS_CZ => 'Všechny federální státy',
        Locale::DE_DE => 'Alle Bundesländer',
        Locale::EN_GB => 'All states',
        Locale::ES_ES => 'Todos los Estados federales',
        Locale::FR_FR => 'Tous les États fédérés',
        Locale::HR_HR => 'Sve savezne države',
        Locale::IT_IT => 'Tutti gli Stati federali',
        Locale::PL_PL => 'Wszystkie stany federalne',
        Locale::SE_SE => 'Alla federala stater',
    ];
    public const STATE_NAME_B = [
        Locale::CS_CZ => 'Burgenland',
        Locale::DE_DE => 'Burgenland',
        Locale::EN_GB => 'Burgenland',
        Locale::ES_ES => 'Burgenland',
        Locale::FR_FR => 'Burgenland',
        Locale::HR_HR => 'Gradišće',
        Locale::IT_IT => 'Burgenland',
        Locale::PL_PL => 'Burgenland',
        Locale::SE_SE => 'Burgenland',
    ];
    public const STATE_NAME_K = [
        Locale::CS_CZ => 'Korutany',
        Locale::DE_DE => 'Kärnten',
        Locale::EN_GB => 'Carinthia',
        Locale::ES_ES => 'Carintia',
        Locale::FR_FR => 'Carinthie',
        Locale::HR_HR => 'Koruška',
        Locale::IT_IT => 'Carinzia',
        Locale::PL_PL => 'Karyntia',
        Locale::SE_SE => 'Kärnten',
    ];
    public const STATE_NAME_N = [
        Locale::CS_CZ => 'Dolní Rakousy',
        Locale::DE_DE => 'Niederösterreich',
        Locale::EN_GB => 'Lower Austria',
        Locale::ES_ES => 'Baja Austria',
        Locale::FR_FR => 'Basse-Autriche',
        Locale::HR_HR => 'Donja Austrija',
        Locale::IT_IT => 'Bassa Austria',
        Locale::PL_PL => 'Dolna Austria',
        Locale::SE_SE => 'Niederösterreich',
    ];
    public const STATE_NAME_O = [
        Locale::CS_CZ => 'Horní Rakousy',
        Locale::DE_DE => 'Oberösterreich',
        Locale::EN_GB => 'Upper Austria',
        Locale::ES_ES => 'Alta Austria',
        Locale::FR_FR => 'Haute-Autriche',
        Locale::HR_HR => 'Gornja Austrija',
        Locale::IT_IT => 'Alta Austria',
        Locale::PL_PL => 'Górna Austria',
        Locale::SE_SE => 'Oberösterreich',
    ];
    public const STATE_NAME_S = [
        Locale::CS_CZ => 'Salcbursko',
        Locale::DE_DE => 'Salzburg',
        Locale::EN_GB => 'Salzburg',
        Locale::ES_ES => 'Salzburgo',
        Locale::FR_FR => 'Salzbourg',
        Locale::HR_HR => 'Salzburg',
        Locale::IT_IT => 'Salisburghese',
        Locale::PL_PL => 'Salzburg',
        Locale::SE_SE => 'Salzburg',
    ];
    public const STATE_NAME_ST = [
        Locale::CS_CZ => 'Štýrsko',
        Locale::DE_DE => 'Steiermark',
        Locale::EN_GB => 'Styria',
        Locale::ES_ES => 'Estiria',
        Locale::FR_FR => 'Styrie',
        Locale::HR_HR => 'Štajerska',
        Locale::IT_IT => 'Stiria',
        Locale::PL_PL => 'Styria',
        Locale::SE_SE => 'Steiermark',
    ];
    public const STATE_NAME_T = [
        Locale::CS_CZ => 'Tyrolsko',
        Locale::DE_DE => 'Tirol',
        Locale::EN_GB => 'Tyrol',
        Locale::ES_ES => 'Tirol',
        Locale::FR_FR => 'Tyrol',
        Locale::HR_HR => 'Tirol',
        Locale::IT_IT => 'Tirolo',
        Locale::PL_PL => 'Tyrol',
        Locale::SE_SE => 'Tyrolen',
    ];
    public const STATE_NAME_V = [
        Locale::CS_CZ => 'Vorarlbersko',
        Locale::DE_DE => 'Vorarlberg',
        Locale::EN_GB => 'Vorarlberg',
        Locale::ES_ES => 'Vorarlberg',
        Locale::FR_FR => 'Vorarlberg',
        Locale::HR_HR => 'Vorarlberg',
        Locale::IT_IT => 'Vorarlberg',
        Locale::PL_PL => 'Vorarlberg',
        Locale::SE_SE => 'Vorarlberg',
    ];
    public const STATE_NAME_W = [
        Locale::CS_CZ => 'Vídeň',
        Locale::DE_DE => 'Wien',
        Locale::EN_GB => 'Vienna',
        Locale::ES_ES => 'Viena',
        Locale::FR_FR => 'Vienne',
        Locale::HR_HR => 'Beč',
        Locale::IT_IT => 'Vienna',
        Locale::PL_PL => 'Wiedeń',
        Locale::SE_SE => 'Wien',
    ];

    /* States */
    public const STATES = [
        self::STATE_CODE_ALL => self::STATE_NAME_ALL,
        self::STATE_CODE_B => self::STATE_NAME_B,
        self::STATE_CODE_K => self::STATE_NAME_K,
        self::STATE_CODE_N => self::STATE_NAME_N,
        self::STATE_CODE_O => self::STATE_NAME_O,
        self::STATE_CODE_S => self::STATE_NAME_S,
        self::STATE_CODE_ST => self::STATE_NAME_ST,
        self::STATE_CODE_T => self::STATE_NAME_T,
        self::STATE_CODE_V => self::STATE_NAME_V,
        self::STATE_CODE_W => self::STATE_NAME_W,
    ];
}
