<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Nothing Interactive 2012 <https://www.nothing.ch/>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @author     Stefan Pfister <red@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['system']['htmlpurifier'] = array
(
	'tables'              => array('tl_htmlpurifier'),
	'icon'                => 'system/modules/htmlpurifier/html/icon.png',
);


/**
 * Hooks
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('HTMLPurifierHelper', 'addFilters');
}

