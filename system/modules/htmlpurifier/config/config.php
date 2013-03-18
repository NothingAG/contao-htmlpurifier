<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * HTML Purifier Contao Extension
 *
 * @copyright  Nothing interactive 2013  <https://www.nothing.ch/>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @author     Stefan Pfister <red@nothing.ch>
 * @author     Patrick Fiaux <nodz@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['system']['htmlpurifier'] = array
(
	'tables'			=> array('tl_htmlpurifier'),
	'icon'				=> 'system/modules/htmlpurifier/assets/icon.png',
);


/**
 * Hooks
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('HTMLPurifierHelper', 'addFilters');
}

