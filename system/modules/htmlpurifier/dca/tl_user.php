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
$GLOBALS['TL_DCA']['tl_user']['palettes']['admin'] = preg_replace(
    '@([,;]language)([,;])@',
    '$1,htmlpurifier$2',
    $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']
);
$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = preg_replace(
    '@([,;]language)([,;])@',
    '$1,htmlpurifier$2',
    $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']
);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = preg_replace(
    '@([,;]language)([,;])@',
    '$1,htmlpurifier$2',
    $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']
);


/**
 * Fields
 */
if ($_GET['do'] == 'user')
{
	$GLOBALS['TL_DCA']['tl_user']['fields']['language']['eval']['tl_class'] = 'w50';
}

$GLOBALS['TL_DCA']['tl_user']['fields']['htmlpurifier'] = array
(
	'label'					=> &$GLOBALS['TL_LANG']['tl_user']['htmlpurifier'],
	'exclude'				=> true,
	'inputType'				=> 'select',
	'foreignKey'			=> 'tl_htmlpurifier.name',
	'eval'					=> array('includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                   => "int(10) unsigned NOT NULL default '0'"
);

