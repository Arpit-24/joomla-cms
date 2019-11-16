<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_stats_admin
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Database\DatabaseInterface;
use Joomla\Module\StatsAdmin\Administrator\Helper\StatsAdminHelper;

$serverinfo = $params->get('serverinfo');
$siteinfo   = $params->get('siteinfo');
$list       = StatsAdminHelper::getStats($params, $app, Factory::getContainer()->get(DatabaseInterface::class));

require ModuleHelper::getLayoutPath('mod_stats_admin', $params->get('layout', 'default'));
