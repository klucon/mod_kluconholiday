<?php
/**
 * @package     KluconHoliday.Module
 * @subpackage  mod_kluconholiday
 *
 * @copyright   Copyright (C) 2020 Ondřej Klučka
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// get the message option

require ModuleHelper::getLayoutPath('mod_kluconholiday', $params->get('layout', 'default'));