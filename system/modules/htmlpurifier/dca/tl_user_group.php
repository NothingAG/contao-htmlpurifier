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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default'] = preg_replace(
    '@([,;])(alexf[,;])@',
    '$1htmlpurifier,$2',
    $GLOBALS['TL_DCA']['tl_user_group']['palettes']['default']
);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_user_group']['fields']['htmlpurifier'] = array
(
	'label'					=> &$GLOBALS['TL_LANG']['tl_user_group']['htmlpurifier'],
	'exclude'				=> true,
	'inputType'				=> 'select',
	'foreignKey'			=> 'tl_htmlpurifier.name',
	'eval'					=> array('includeBlankOption'=>true, 'tl_class'=>'clr'),
    'sql'                   => "int(10) unsigned NOT NULL default '0'"
);

