<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2010
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: tl_user.php 14 2011-04-19 08:53:03Z A.Schempp $
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_user']['palettes']['admin'] = preg_replace('@([,;]language)([,;])@', '$1,htmlpurifier$2', $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = preg_replace('@([,;]language)([,;])@', '$1,htmlpurifier$2', $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = preg_replace('@([,;]language)([,;])@', '$1,htmlpurifier$2', $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']);


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
);

