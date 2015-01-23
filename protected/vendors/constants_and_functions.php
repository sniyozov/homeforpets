<?php
/**
 * Additional php constants and functions
 */
 
// Page url rules
defined('STRIP_LAST_SLASH') or define('STRIP_LAST_SLASH', 1);
defined('ADD_LAST_SLASH') or define('ADD_LAST_SLASH', 0);

// Возвращает дату с русским названием месяца
/**
 * Get date with russian month name
 * @param integer $timestamp 
 * @param string $postfix 
 * @return string
 */
function rusDate($timestamp = 0, $format = "{day} {month} {year}")
{
    $day = date('d', $timestamp);
    $mounth = date('n', $timestamp);
    $year = date('Y', $timestamp);

    $rusMounthList = array(
        'января',
        'февраля',
        'марта',
        'апреля',
        'мая',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    );
    return strtr($format, array('{day}' => $day, '{month}' => $rusMounthList[$mounth], '{year}' => $year));
}
?>
