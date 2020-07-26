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


?>