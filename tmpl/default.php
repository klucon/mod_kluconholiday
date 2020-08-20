<?php
/**
 * @package     KluconHoliday.Module
 * @subpackage  mod_kluconholiday
 *
 * @copyright   Copyright (C) 2020 Ondřej Klučka
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$msg = Text::_('MOD_KLUCONHOLIDAY_TODAY');

$file = file_get_contents ("http://build.klucon.cz/mod_kluconholiday/data.json");
$json = json_decode($file, true);

$greeting_day = $params->get('greeting_day');
if($greeting_day == 1 ){
    $hours = Date('G');
if ($hours>=0 and $hours<=5)       {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_NIGHT";}
if ($hours>=6 and $hours<=7)       {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_MORNING1";}
if ($hours>=8 and $hours<=11)      {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_MORNING2";}
if ($hours == 12)                  {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_MORNING3";}
if ($hours>=13 and $hours<=15)     {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_AFTERNOON1";}
if ($hours>=16 and $hours<=17)     {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_AFTERNOON2";}
if ($hours>=18 and $hours<=21)     {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_EVENING";}
if ($hours>=22 and $hours<=23)     {$greeting="MOD_KLUCONHOLIDAY_GREETING_GOOD_NIGHT";}
echo "<strong>";
echo JText::_($greeting); 
echo "</strong><br />";
} else {
    echo ("");
}

$today_date = $params->get('today_date');
if($today_date == 1 ){
echo "<strong>";
echo JText::_('MOD_KLUCONHOLIDAY_TODAY_DATE');
echo "</strong>";
?>
<p style="text-align:right;">
<?php
echo Date("d. m. Y", Time());
echo "</p>";             
} else {
    echo ("");
}

$folk_holiday = $params->get('folk_holiday');
if($folk_holiday == 1 ){

echo "<strong>";
echo JText::_('MOD_KLUCONHOLIDAY_FOLK_HOLIDAY');
echo "</strong>";
?>
<p style="text-align:right;">
<?php
echo $json['svatky']['0']['lidovy'];
echo "</p>";         
} else {
    echo ("");
}

$liturgical_holiday = $params->get('liturgical_holiday');
if($liturgical_holiday == 1 ){

echo "<strong>";
echo JText::_('MOD_KLUCONHOLIDAY_LITURGICAL_HOLIDAY');
echo "</strong>";
?>
<p style="text-align:right;">
<?php
echo $json['svatky']['0']['liturgicky'];
echo "</p>";         
} else {
    echo ("");
}

$dogs_holiday = $params->get('dogs_holiday');
if($dogs_holiday == 1 ){

echo "<strong>";
echo JText::_('MOD_KLUCONHOLIDAY_DOGS_HOLIDAY');
echo "</strong>";
?>
<p style="text-align:right;">
<?php
echo $json['svatky']['0']['pes'];
echo "</p>";         
} else {
    echo ("");
}

$cats_holiday = $params->get('cats_holiday');
if($cats_holiday == 1 ){

echo "<strong>";
echo JText::_('MOD_KLUCONHOLIDAY_CATS_HOLIDAY');
echo "</strong>";
?>
<p style="text-align:right;">
<?php
echo $json['svatky']['0']['kocka'];
echo "</p>";         
} else {
    echo ("");
}

$horses_holiday = $params->get('horses_holiday');
if($horses_holiday == 1 ){

echo "<strong>";
echo JText::_('MOD_KLUCONHOLIDAY_HORSES_HOLIDAY');
echo "</strong>";
?>
<p style="text-align:right;">
<?php
echo $json['svatky']['0']['kun'];
echo "</p>";         
} else {
    echo ("");
}
?>